<?php
/**
*  @author    Onthemes 
*  @copyright 2015-2017 Onthemes. All Rights Reserved.
*  @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once(_PS_MODULE_DIR_.'otcompare/classes/CompareProduct.php');

class otcompare extends Module
{
    private $templateFile;
    private $link;

    public function __construct()
    {
        $this->name = 'otcompare';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Onthemes';
        $this->controllers = array('compare');
        $this->bootstrap = true;
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('OT - Compare Products');
        $this->description = $this->l('Adds Product Compare function to store.');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->link = $this->context->link;

        $this->templateFile = 'module:otcompare/views/templates/hook/otcompare.tpl';
    }

    public function install()
    {
        $this->createTables();

        Configuration::updateValue('OTCOMPARATOR_ENABLE', 1);
        Configuration::updateValue('OTCOMPARATOR_PRODUCTLIST', 1);
        Configuration::updateValue('OTCOMPARATOR_PRODUCTPAGE', 1);
        Configuration::updateValue('OTCOMPARATOR_HEADER', 1);
        Configuration::updateValue('OTCOMPARATOR_MAXITEM', '3');

        return parent::install()
            && $this->registerHook('displayotcompareButton')
            && $this->registerHook('displayotcompareHeader')
            && $this->registerHook('displayotcompare')
            && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        $this->deleteTables();

        Configuration::deleteByName('OTCOMPARATOR_ENABLE');
        Configuration::deleteByName('OTCOMPARATOR_PRODUCTLIST');
        Configuration::deleteByName('OTCOMPARATOR_PRODUCTPAGE');
        Configuration::deleteByName('OTCOMPARATOR_HEADER');
        Configuration::deleteByName('OTCOMPARATOR_MAXITEM');

        return parent::uninstall();
    }

    protected function createTables()
    {
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'otcompare` (
            `id_compare` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `id_customer` int(10) unsigned NOT NULL,
            PRIMARY KEY (`id_compare`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'otcompare_product` (
            `id_compare` int(10) unsigned NOT NULL,
            `id_product` int(10) unsigned NOT NULL,
            `date_add` datetime NOT NULL,
            `date_upd` datetime NOT NULL,
            PRIMARY KEY (`id_compare`, `id_product`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }

    protected function deleteTables()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS `'._DB_PREFIX_.'otcompare`, `'._DB_PREFIX_.'otcompare_product`;
        ');
    }

    public function getContent()
    {
        return $this->postProcess().$this->renderForm();
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitotcompare';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable Product Comparison'),
                        'name' => 'OTCOMPARATOR_ENABLE',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Compare Button in Product List'),
                        'name' => 'OTCOMPARATOR_PRODUCTLIST',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Compare Button in Product Page'),
                        'name' => 'OTCOMPARATOR_PRODUCTPAGE',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Compare Link in Header'),
                        'name' => 'OTCOMPARATOR_HEADER',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Product comparison'),
                        'validation' => 'isUnsignedId',
                        'name' => 'OTCOMPARATOR_MAXITEM',
                        'required' => true,
                        'cast' => 'intval',
                        'hint' => $this->l('Set the maximum number of products that can be selected for comparison. Set to "0" to disable this feature.'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    protected function getConfigFormValues()
    {
        $data = array(
            'OTCOMPARATOR_ENABLE' => Tools::getValue('OTCOMPARATOR_ENABLE', Configuration::get('OTCOMPARATOR_ENABLE')),
            'OTCOMPARATOR_PRODUCTLIST' => Tools::getValue('OTCOMPARATOR_PRODUCTLIST', Configuration::get('OTCOMPARATOR_PRODUCTLIST')),
            'OTCOMPARATOR_PRODUCTPAGE' => Tools::getValue('OTCOMPARATOR_PRODUCTPAGE', Configuration::get('OTCOMPARATOR_PRODUCTPAGE')),
            'OTCOMPARATOR_HEADER' => Tools::getValue('OTCOMPARATOR_HEADER', Configuration::get('OTCOMPARATOR_HEADER')),
            'OTCOMPARATOR_MAXITEM' => Tools::getValue('OTCOMPARATOR_MAXITEM', Configuration::get('OTCOMPARATOR_MAXITEM')),
        );
        return $data;
    }

    protected function postProcess()
    {
        if (((bool)Tools::isSubmit('submitotcompare')) == true) {
            Configuration::updateValue('OTCOMPARATOR_ENABLE', (int)(Tools::getValue('OTCOMPARATOR_ENABLE')));
            Configuration::updateValue('OTCOMPARATOR_PRODUCTLIST', (int)(Tools::getValue('OTCOMPARATOR_PRODUCTLIST')));
            Configuration::updateValue('OTCOMPARATOR_PRODUCTPAGE', (int)(Tools::getValue('OTCOMPARATOR_PRODUCTPAGE')));
            Configuration::updateValue('OTCOMPARATOR_HEADER', (int)(Tools::getValue('OTCOMPARATOR_HEADER')));
            Configuration::updateValue('OTCOMPARATOR_MAXITEM', Tools::getValue('OTCOMPARATOR_MAXITEM'));
            $this->_clearCache($this->templateFile);
            return $this->displayConfirmation($this->l('The settings have been updated.'));
        }
        return '';
    }

    public function hookDisplayHeader()
    {
        if (Configuration::get('OTCOMPARATOR_ENABLE') && Configuration::get('OTCOMPARATOR_MAXITEM') > 0) {
            $this->context->controller->registerJavascript('module-compare', 'modules/'.$this->name.'/views/js/products-comparison.js', ['position' => 'bottom', 'priority' => 150]);

            $compared_products = array();
            if (Configuration::get('OTCOMPARATOR_MAXITEM') && isset($this->context->cookie->id_compare)) {
                $compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
            }
            
            $comparator_max_item = (int)Configuration::get('OTCOMPARATOR_MAXITEM');
            
            $productcompare_max_item = sprintf($this->l('You cannot add more than %d product(s) to the product comparison'), $comparator_max_item);
            Media::addJsDef(
                array(
                    'compareUrl' => $this->link->getModuleLink('otcompare', 'compare'),
                    'compareAdd' => $this->l('The product has been added to product comparison'),
                    'compareRemove' => $this->l('The product has been removed from the product comparison.'),
                    'compareView' => $this->l('Compare'),
                    'comparedProductsIds' => (count($compared_products)>0) ? $compared_products : array(),
                    'comparator_max_item' => $comparator_max_item,
                    'compared_products' => (count($compared_products)>0) ? $compared_products : array(),
                    'max_item' => $productcompare_max_item,
                )
            );
        }
    }

    public function hookDisplayotcompareButton($params)
    {
        if (Configuration::get('OTCOMPARATOR_ENABLE') && Configuration::get('OTCOMPARATOR_MAXITEM') > 0) {
            $page_name = Dispatcher::getInstance()->getController();
            if ((Configuration::get('OTCOMPARATOR_PRODUCTLIST') && $page_name != 'product') || (Configuration::get('OTCOMPARATOR_PRODUCTPAGE') && $page_name == 'product')) {
                $id_product = $params['product']['id_product'];
                $compared_products = array();
                if (Configuration::get('OTCOMPARATOR_MAXITEM') && isset($this->context->cookie->id_compare)) {
                    $compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
                }
                $added = false;
                if (count($compared_products) > 0 && in_array($id_product, $compared_products)) {
                    $added = true;
                }
                $this->smarty->assign(array(
                    'added' => $added,
                    'id_product' => $id_product,
                ));
                return $this->display(__FILE__, 'otcompare-button.tpl');
            }
        }
    }

    public function hookDisplayotcompare($params)
    {
        if (Configuration::get('OTCOMPARATOR_ENABLE') && Configuration::get('OTCOMPARATOR_MAXITEM') > 0) {
            $compared_products = array();
            if (Configuration::get('OTCOMPARATOR_MAXITEM') && isset($this->context->cookie->id_compare)) {
                $compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
            }

            $this->smarty->assign(array(
                'compareUrl' => $this->link->getModuleLink('otcompare', 'compare'),
                'compared_products'   => is_array($compared_products) ? $compared_products : array(),
                'comparator_max_item' => Configuration::get('OTCOMPARATOR_MAXITEM'),
            ));

            return ($this->display(__FILE__, 'product-compare.tpl'));
        }
    }

    public function hookDisplayotcompareHeader($params)
    {
        if (Configuration::get('OTCOMPARATOR_ENABLE') && Configuration::get('OTCOMPARATOR_HEADER') && Configuration::get('OTCOMPARATOR_MAXITEM') > 0) {
            $compared_products = array();
            if (Configuration::get('OTCOMPARATOR_MAXITEM') && isset($this->context->cookie->id_compare)) {
                $compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);
            }

            $this->smarty->assign(array(
                'compareUrl' => $this->link->getModuleLink('otcompare', 'compare'),
                'compared_products'   => is_array($compared_products) ? $compared_products : array(),
                'comparator_max_item' => Configuration::get('OTCOMPARATOR_MAXITEM'),
            ));

            return ($this->display(__FILE__, 'product-compare-header.tpl'));
        }
    }

    public function prepareVariables()
    {
        return array(
            'OTCOMPARATOR_ENABLE' => (int)Configuration::get('OTCOMPARATOR_ENABLE'),
            'OTCOMPARATOR_PRODUCTLIST' => (int)Configuration::get('OTCOMPARATOR_PRODUCTLIST'),
            'OTCOMPARATOR_PRODUCTPAGE' => (int)Configuration::get('OTCOMPARATOR_PRODUCTPAGE'),
            'OTCOMPARATOR_HEADER' => (int)Configuration::get('OTCOMPARATOR_HEADER'),
            'OTCOMPARATOR_MAXITEM' => Configuration::get('OTCOMPARATOR_MAXITEM'),
        );
    }
}

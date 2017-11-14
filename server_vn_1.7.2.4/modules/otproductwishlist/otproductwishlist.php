<?php
/**
*  @author    Onthemes
*  @copyright 2015-2017 Onthemes. All Rights Reserved.
*  @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(dirname(__FILE__).'/classes/OtWishList.php');

class OtProductWishList extends Module
{
    private $html = '';
    private $static_token;
 
    public function __construct()
    {
        $this->name = 'otproductwishlist';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Onthemes';
        $this->need_instance = 0;

        $this->controllers = array('mywishlist', 'view');

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('OT - Wishlist block');
        $this->description = $this->l('Adds a block containing the customers wishlists.');
        $this->default_wishlist_name = $this->l('My wishlist');
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
        $this->html = '';
    }

    public function install()
    {
        $this->createTables();

        Configuration::updateValue('OTWISHLIST_ENABLE', 1);
        Configuration::updateValue('OTWISHLIST_PRODUCTLIST', 1);
        Configuration::updateValue('OTWISHLIST_PRODUCTPAGE', 1);
        Configuration::updateValue('OTWISHLIST_HEADER', 1);

        return parent::install()
        && $this->registerHook('cart')
        && $this->registerHook('displayHeader')
        && $this->registerHook('displayOtWishListButton')
        && $this->registerHook('displayOtWishlistHeader')
        && $this->registerHook('customerAccount')
        && $this->registerHook('actionAdminControllerSetMedia')
        && $this->registerHook('displayMyAccountBlock');
    }

    public function uninstall()
    {
        $this->deleteTables();

        Configuration::deleteByName('OTWISHLIST_ENABLE');
        Configuration::deleteByName('OTWISHLIST_PRODUCTLIST');
        Configuration::deleteByName('OTWISHLIST_PRODUCTPAGE');
        Configuration::deleteByName('OTWISHLIST_HEADER');

        return parent::uninstall();
    }

    protected function createTables()
    {
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'otwishlist` (
                `id_wishlist` int(10) unsigned NOT NULL auto_increment,
                `id_customer` int(10) unsigned NOT NULL,
                `token` varchar(64) character set utf8 NOT NULL,
                `name` varchar(64) character set utf8 NOT NULL,
                `counter` int(10) unsigned NULL,
                `id_shop` int(10) unsigned default 1,
                `id_shop_group` int(10) unsigned default 1,
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
                `default` int(10) unsigned default 0,
                PRIMARY KEY  (`id_wishlist`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
        ');

        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'otwishlist_email` (
                `id_wishlist` int(10) unsigned NOT NULL,
                `email` varchar(128) character set utf8 NOT NULL,
                `date_add` datetime NOT NULL
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
        ');

        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'otwishlist_product` (
                `id_wishlist_product` int(10) NOT NULL auto_increment,
                `id_wishlist` int(10) unsigned NOT NULL,
                `id_product` int(10) unsigned NOT NULL,
                `id_product_attribute` int(10) unsigned NOT NULL,
                `quantity` int(10) unsigned NOT NULL,
                `priority` int(10) unsigned NOT NULL,
                PRIMARY KEY  (`id_wishlist_product`)
            ) ENGINE='._MYSQL_ENGINE_.'  DEFAULT CHARSET=utf8;
        ');

        return $res;
    }

    private function deleteTables()
    {
        return Db::getInstance()->execute(
            'DROP TABLE IF EXISTS
            `'._DB_PREFIX_.'otwishlist`,
            `'._DB_PREFIX_.'otwishlist_email`,
            `'._DB_PREFIX_.'otwishlist_product`'
        );
    }

    public function getContent()
    {
        if (Tools::isSubmit('viewotproductwishlist') && $id = Tools::getValue('id_product')) {
            Tools::redirect($this->context->link->getProductLink($id));
        } elseif (Tools::isSubmit('submitSettings')) {
            $activated = Tools::getValue('activated');
            if ($activated != 0 && $activated != 1) {
                $this->html .= $this->displayError($this->l('Activate module : Invalid choice.'));
            }
            Configuration::updateValue('OTWISHLIST_ENABLE', (int)(Tools::getValue('OTWISHLIST_ENABLE')));
            Configuration::updateValue('OTWISHLIST_PRODUCTLIST', (int)(Tools::getValue('OTWISHLIST_PRODUCTLIST')));
            Configuration::updateValue('OTWISHLIST_PRODUCTPAGE', (int)(Tools::getValue('OTWISHLIST_PRODUCTPAGE')));
            Configuration::updateValue('OTWISHLIST_HEADER', (int)(Tools::getValue('OTWISHLIST_HEADER')));
            $this->html .= $this->displayConfirmation($this->l('Your settings have been updated.'));
        }

        $this->html .= $this->renderConfigForm();
        $this->html .= $this->renderForm();
        if (Tools::getValue('id_customer') && Tools::getValue('id_wishlist')) {
            $this->html .= $this->renderList((int)Tools::getValue('id_wishlist'));
        }

        return $this->html;
    }

    public function hookDisplayOtWishListButton($params)
    {
        if (Configuration::get('OTWISHLIST_ENABLE')) {
            $page_name = Dispatcher::getInstance()->getController();
            if ((Configuration::get('OTWISHLIST_PRODUCTLIST') && $page_name != 'product') || (Configuration::get('OTWISHLIST_PRODUCTPAGE') && $page_name == 'product')) {
                if ($this->context->customer->isLogged()) {
                    $this->smarty->assign('wishlists', OtWishList::getByIdCustomer($this->context->customer->id));
                    if (OtWishList::isDefault($this->context->customer->id)) {
                        $default_wishlist = OtWishList::getDefault($this->context->customer->id);
                        $this->context->cookie->id_wishlist = $default_wishlist[0]['id_wishlist'];
                    }
                }

                $this->smarty->assign('product', $params['product']);
                return $this->display(__FILE__, 'views/templates/hook/otproductwishlist_button.tpl');
            }
        }
    }

    public function hookDisplayOtWishlistHeader($params)
    {
        if (Configuration::get('OTWISHLIST_ENABLE') && Configuration::get('OTWISHLIST_HEADER')) {
            $this->context->smarty->assign(array(
                'count_product' => (int)Db::getInstance()->getValue('SELECT count(id_wishlist_product) FROM '._DB_PREFIX_.'otwishlist w, '._DB_PREFIX_.'otwishlist_product wp where w.id_wishlist = wp.id_wishlist and w.id_customer='.(int)$this->context->customer->id),
            ));

            return  $this->display(__FILE__, 'views/templates/hook/otproductwishlist_top.tpl');
        }
    }

    public function hookActionAdminControllerSetMedia()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
        }
    }

    public function hookHeader($params)
    {
        if (Configuration::get('OTWISHLIST_ENABLE')) {
            $this->context->controller->registerJavascript('ajax-wishlist', 'modules/'.$this->name.'/views/js/ajax-wishlist.js', ['position' => 'bottom', 'priority' => 150]);

            $useSSL = ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode()) ? true : false;
            $protocol_content = ($useSSL) ? 'https://' : 'http://';
            $this->static_token = Tools::getToken(false);
            $isLogged = $this->context->customer->logged;
            if ($isLogged) {
                $isLoggedWishlist = true;
            } else {
                $isLoggedWishlist = false;
            }
            Media::addJsDef(
                array(
                    'baseDir' => $protocol_content.Tools::getHttpHost().__PS_BASE_URI__,
                    'wishlistProductsIds' => '',
                    'static_token' => $this->static_token,
                    'isLogged' => $isLogged,
                    'loggin_required' => $this->l('You must be logged in to manage your wishlist.'),
                    'added_to_wishlist' => $this->l('The product was successfully added to your wishlist.'),
                    'mywishlist_url' => $this->context->link->getModuleLink('otproductwishlist', 'mywishlist'),
                    'isLoggedWishlist' => $isLoggedWishlist,
                    'wishlistView' => $this->l('Your Wishlist'),
                    'loginLabel' => $this->l('Login'),
                    'login_url' => $this->context->link->getPageLink('my-account')
                )
            );
        }
    }

    public function hookCustomerAccount($params)
    {
        if (Configuration::get('OTWISHLIST_ENABLE')) {
            return $this->display(__FILE__, 'views/templates/hook/my-account.tpl');
        }
    }

    public function hookDisplayMyAccountBlock($params)
    {
        if (Configuration::get('OTWISHLIST_ENABLE')) {
            return $this->display(__FILE__, 'views/templates/hook/my-account-footer.tpl');
        }
    }

    public function renderConfigForm()
    {
        $fields_form_1 = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Configuration'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable Product Wishlist'),
                        'name' => 'OTWISHLIST_ENABLE',
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
                        'label' => $this->l('Display Wishlist Button in Product List'),
                        'name' => 'OTWISHLIST_PRODUCTLIST',
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
                        'label' => $this->l('Display Wishlist Button in Product Page'),
                        'name' => 'OTWISHLIST_PRODUCTPAGE',
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
                        'label' => $this->l('Display Wishlist Button in Header'),
                        'name' => 'OTWISHLIST_HEADER',
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
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submitSettings',
                ),
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->name;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSettings';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form_1));
    }

    protected function getConfigFieldsValues()
    {
        $data = array(
            'OTWISHLIST_ENABLE' => Tools::getValue('OTWISHLIST_ENABLE', Configuration::get('OTWISHLIST_ENABLE')),
            'OTWISHLIST_PRODUCTLIST' => Tools::getValue('OTWISHLIST_PRODUCTLIST', Configuration::get('OTWISHLIST_PRODUCTLIST')),
            'OTWISHLIST_PRODUCTPAGE' => Tools::getValue('OTWISHLIST_PRODUCTPAGE', Configuration::get('OTWISHLIST_PRODUCTPAGE')),
            'OTWISHLIST_HEADER' => Tools::getValue('OTWISHLIST_HEADER', Configuration::get('OTWISHLIST_HEADER')),
        );
        return $data;
    }

    public function renderForm()
    {
        $customers = array();
        foreach (OtWishList::getCustomers() as $c) {
            $customers[$c['id_customer']]['id_customer'] = $c['id_customer'];
            $customers[$c['id_customer']]['name'] = $c['firstname'].' '.$c['lastname'];
        }

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Listing'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->l('Customers :'),
                        'name' => 'id_customer',
                        'options' => array(
                            'default' => array('value' => 0, 'label' => $this->l('Choose customer')),
                            'query' => $customers,
                            'id' => 'id_customer',
                            'name' => 'name'
                        ),
                    ),
                ),
            ),
        );

        if ($id_customer = Tools::getValue('id_customer')) {
            $wishlists = OtWishList::getByIdCustomer($id_customer);
            $fields_form['form']['input'][] = array(
                'type' => 'select',
                'label' => $this->l('Wishlist :'),
                'name' => 'id_wishlist',
                'options' => array(
                    'default' => array('value' => 0, 'label' => $this->l('Choose wishlist')),
                    'query' => $wishlists,
                    'id' => 'id_wishlist',
                    'name' => 'name'
                ),
            );
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name
        .'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFormValues()
    {
        return array(
            'id_customer' => Tools::getValue('id_customer'),
            'id_wishlist' => Tools::getValue('id_wishlist'),
        );
    }

    public function renderList($id_wishlist)
    {
        $wishlist = new OtWishList($id_wishlist);
        $products = OtWishList::getProductByIdCustomer($id_wishlist, $wishlist->id_customer, $this->context->language->id);

        foreach ($products as $key => $val) {
            $image = Image::getCover($val['id_product']);
            $products[$key]['image'] = $this->context->link->getImageLink($val['link_rewrite'], $image['id_image'], ImageType::getFormatedName('small'));
        }

        $fields_list = array(
            'image' => array(
                'title' => $this->l('Image'),
                'type' => 'image',
            ),
            'name' => array(
                'title' => $this->l('Product'),
                'type' => 'text',
            ),
            'attributes_small' => array(
                'title' => $this->l('Combination'),
                'type' => 'text',
            ),
            'quantity' => array(
                'title' => $this->l('Quantity'),
                'type' => 'text',
            ),
            'priority' => array(
                'title' => $this->l('Priority'),
                'type' => 'priority',
                'values' => array($this->l('High'), $this->l('Medium'), $this->l('Low')),
            ),
        );

        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = true;
        $helper->no_link = true;
        $helper->actions = array('view');
        $helper->show_toolbar = false;
        $helper->module = $this;
        $helper->identifier = 'id_product';
        $helper->title = $this->l('Product list');
        $helper->table = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->tpl_vars = array('priority' => array($this->l('High'), $this->l('Medium'), $this->l('Low')));

        return $helper->generateList($products, $fields_list);
    }
}

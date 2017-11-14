<?php /* Smarty version Smarty-3.1.19, created on 2017-11-14 22:09:27
         compiled from "/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/admin9945q9hrh/themes/default/template/controllers/translations/helpers/view/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20623285985a0b07279da851-86178266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1014095b6bf56be772c0627b9d0c298208721fc8' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/admin9945q9hrh/themes/default/template/controllers/translations/helpers/view/main.tpl',
      1 => 1510670196,
      2 => 'file',
    ),
    'a39884be64047466022e4006b29b0e28b70f5767' => 
    array (
      0 => '/homepages/34/d709282345/htdocs/decormoon_1.7.2.4_server/admin9945q9hrh/themes/default/template/helpers/view/view.tpl',
      1 => 1510670196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20623285985a0b07279da851-86178266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0b0727a72757_06879510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b0727a72757_06879510')) {function content_5a0b0727a72757_06879510($_smarty_tpl) {?>

<div class="leadin"></div>


	<script type="text/javascript">
		function chooseTypeTranslation(id_lang)
		{
			getE('translation_lang').value = id_lang;

      var formTranslation = $('form#typeTranslationForm');
      var typeOption = $('#type option:selected');

      if ('mails' == $('#type option:selected').val()) {
        typeOption = $('#ps_email_selector select[name="selected-emails"] option:selected');
      }

      if ('modules' == $('#type option:selected').val()) {
        urlToTranslate = $('#ps_module_selector select[name="selected-modules"] option:selected').data('url-to-translate');
        if ('' !== urlToTranslate) {
          formTranslation.attr(
            'action',
            urlToTranslate + '&lang=' + id_lang
          );
        } else {
          formTranslation.attr('action', formTranslation.data('moduleaction'));
        }
      } else {
        if ('legacy' === typeOption.data('controller')) {
          formTranslation.attr('action', formTranslation.data('legacyaction'));
        } else {
          formTranslation.attr('action', formTranslation.data('sfaction'));
        }
      }

      formTranslation.submit();
		}

		$(document).ready(function() {
      var themeSelector = $('#ps_theme_selector');
      var themeSelectorSelect = themeSelector.find('select[name="selected-theme"]');
      var themeCoreOption = themeSelector.find('select[name="selected-theme"] option#core-option');

      var emailSelector = $('#ps_email_selector');
      var emailSelectorSelect = emailSelector.find('select[name="selected-emails"]');

      var moduleSelector = $('#ps_module_selector');
      var moduleSelectorSelect = moduleSelector.find('select[name="selected-modules"]');

      var allSelectors = $('select[name="selected-modules"], select[name="selected-emails"], select[name="selected-theme"], select[name="locale"]');

      themeSelector.hide();
      themeSelectorSelect.attr('disabled', true);

      emailSelector.hide();
      emailSelectorSelect.attr('disabled', true);

      moduleSelector.hide();
      moduleSelectorSelect.attr('disabled', true);

      $('#type').on('change', function () {

        // reset all select
        allSelectors.each(function () {
          $(this).prop('selectedIndex',0);
        });

        if ('mails' === $(this).val()) {
          emailSelector.show();
          emailSelectorSelect.attr('disabled', false);
        } else {
          emailSelector.hide();
          emailSelectorSelect.attr('disabled', true);
        }

        if ('modules' === $(this).val()) {
          moduleSelector.show();
          moduleSelectorSelect.attr('disabled', false);
        } else {
          moduleSelector.hide();
          moduleSelectorSelect.attr('disabled', true);
        }

        if ('themes' === $(this).val()) {
          themeSelector.find('select[name="selected-theme"]').prop('selectedIndex',1);
          themeCoreOption.hide().attr('disabled', true);
        } else {
          themeCoreOption.show().attr('disabled', false);
        }

        if (1 === $('#type option:selected').data('choicetheme')) {
          themeSelector.show();
          themeSelectorSelect.attr('disabled', false);
        } else {
          themeSelector.hide();
          themeSelectorSelect.attr('disabled', true);
        }
      });

      $('select[name="selected-emails"]').on('change', function() {
        if ('subject' === $(this).val()) {
          themeSelector.hide();
          themeSelectorSelect.attr('disabled', true);
        } else {
          themeSelector.show();
          themeSelectorSelect.attr('disabled', false);
        }
      });

			$('#modify-translations').click(function() {
				var languages = $('#translations-languages option');
				var i;
				var selectedLanguage;

				for (i = 0; i < languages.length; i++) {
					if (languages[i].selected) {
						selectedLanguage = languages[i].value;

						break;
					}
				}

        if ('modules' === $('#type option:selected').val() && '' === $('[name="selected-modules"]').val()) {
          alert('<?php echo smartyTranslate(array('s'=>'Please select a module!','d'=>'Admin.International.Notification'),$_smarty_tpl);?>
');

          return;
        }

				if (0 === selectedLanguage.length) {
					alert('<?php echo smartyTranslate(array('s'=>'Please select your language!','d'=>'Admin.International.Notification'),$_smarty_tpl);?>
');

					return;
				}

				chooseTypeTranslation(selectedLanguage);
			});
		});
	</script>
  <form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'sf','route'=>'admin_international_translations_list'),$_smarty_tpl);?>
"
        data-sfaction="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'sf','route'=>'admin_international_translations_list'),$_smarty_tpl);?>
"
        data-moduleaction="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'sf','route'=>'admin_international_translations_module'),$_smarty_tpl);?>
"
        data-legacyaction="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTranslations',true);?>
"
        id="typeTranslationForm" class="form-horizontal">
    <div class="panel">
      <h3>
        <i class="icon-file-text"></i>
        <?php echo smartyTranslate(array('s'=>'Modify translations','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

      </h3>
      <p class="alert alert-info">
        <?php echo smartyTranslate(array('s'=>'Here you can modify translations for every line of text inside PrestaShop.','d'=>'Admin.International.Help'),$_smarty_tpl);?>
<br />
        <?php echo smartyTranslate(array('s'=>'First, select a type of translation (such as "Back office" or "Installed modules"), and then select the language you want to translate strings in.','html'=>true,'d'=>'Admin.International.Help'),$_smarty_tpl);?>

      </p>
      <div class="form-group">
        <input type="hidden" name="controller" value="AdminTranslations" />
        <input type="hidden" name="lang" id="translation_lang" value="0" />
        <label class="control-label col-lg-3" for="type"><?php echo smartyTranslate(array('s'=>'Type of translation','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
        <div class="col-lg-4">
          <select name="type" id="type">
            <?php  $_smarty_tpl->tpl_vars['array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['array']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['translations_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['array']->key => $_smarty_tpl->tpl_vars['array']->value) {
$_smarty_tpl->tpl_vars['array']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['array']->key;
?>
              <?php if (isset($_smarty_tpl->tpl_vars['array']->value['name'])) {?><option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-controller="<?php if ($_smarty_tpl->tpl_vars['array']->value['sf_controller']) {?>sf<?php } else { ?>legacy<?php }?>" data-choicetheme="<?php echo $_smarty_tpl->tpl_vars['array']->value['choice_theme'];?>
"><?php echo $_smarty_tpl->tpl_vars['array']->value['name'];?>
</option><?php }?>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_email_selector">
        <label class="control-label col-lg-3" for="selected-emails"><?php echo smartyTranslate(array('s'=>'Select the type of email content','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
        <div class="col-lg-4">
          <select name="selected-emails">
            <option value="subject" data-controller="sf"><?php echo smartyTranslate(array('s'=>'Subject','d'=>'Admin.Global'),$_smarty_tpl);?>
</option>
            <option value="body" data-controller="legacy"><?php echo smartyTranslate(array('s'=>'Body','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</option>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_module_selector">
        <label class="control-label col-lg-3" for="selected-modules"><?php echo smartyTranslate(array('s'=>'Select your module','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
        <div class="col-lg-4">
          <select name="selected-modules" class="chosen">
            <option id="no-module" value="">---</option>
            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
" data-url-to-translate="<?php echo $_smarty_tpl->tpl_vars['module']->value['urlToTranslate'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['displayName'];?>
</option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_theme_selector">
        <label class="control-label col-lg-3" for="selected-theme"><?php echo smartyTranslate(array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
        <div class="col-lg-4">
          <select name="selected-theme">
              <option id="core-option" value=""><?php echo smartyTranslate(array('s'=>'Core (no theme selected)','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</option>
            <?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value==$_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3" for="translations-languages"><?php echo smartyTranslate(array('s'=>'Select your language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
        <div class="col-lg-4">
          <select name="locale" id="translations-languages">
            <option value=""><?php echo smartyTranslate(array('s'=>'Language','d'=>'Admin.Global'),$_smarty_tpl);?>
</option>
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="panel-footer">
        <button type="button" class="btn btn-default pull-right" id="modify-translations">
          <i class="process-icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Modify','d'=>'Admin.Actions'),$_smarty_tpl);?>

        </button>
      </div>
    </div>
  </form>

	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo smartyTranslate(array('s'=>'Add / Update a language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

			</h3>
			<div id="submitAddLangContent" class="form-group">
				<p class="alert alert-info">
					<?php echo smartyTranslate(array('s'=>'You can add or update a language directly from the PrestaShop website here.','d'=>'Admin.International.Help'),$_smarty_tpl);?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['packs_to_update']->value||$_smarty_tpl->tpl_vars['packs_to_install']->value) {?>
					<label class="control-label col-lg-3" for="params_import_language"><?php echo smartyTranslate(array('s'=>'Please select the language you want to add or update','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-6">
								<select id="params_import_language" name="params_import_language" class="chosen" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
								<optgroup label="<?php echo smartyTranslate(array('s'=>'Update a language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
">
									<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['packs_to_update']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['locale']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
									<?php } ?>
								</optgroup>
								<optgroup label="<?php echo smartyTranslate(array('s'=>'Add a language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
">
									<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['packs_to_install']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['locale']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
									<?php } ?>
								</optgroup>
							</select>
							</div>
						</div>
					</div>

				<?php } else { ?>
					<p class="text-danger"><?php echo smartyTranslate(array('s'=>'Cannot connect to the PrestaShop website to get the language list.','d'=>'Admin.International.Notification'),$_smarty_tpl);?>
</p>
				<?php }?>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitAddLanguage" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
					<i class="process-icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Add or update a language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

				</button>
			</div>
		</div>
	</form>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal hide">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo smartyTranslate(array('s'=>'Import a language pack manually','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'If the language file format is ISO_code.gzip (e.g. "us.gzip"), and the language corresponding to this package does not exist, it will automatically be created.','html'=>true,'d'=>'Admin.International.Help'),$_smarty_tpl);?>

				<?php echo smartyTranslate(array('s'=>'Warning: This will replace all of the existing data inside the destination language.','d'=>'Admin.International.Help'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<label for="importLanguage" class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Language pack to import','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<div class="form-group">
						<div class="col-lg-12">
							<input id="importLanguage" type="file" name="file" class="hide" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?> />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
										<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Add file','d'=>'Admin.Actions'),$_smarty_tpl);?>

									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="selectThemeForImport" class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="theme[]" id="selectThemeForImport" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?> <?php if (count($_smarty_tpl->tpl_vars['themes']->value)>1) {?>multiple="multiple"<?php }?> >
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getDirectory();?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
 &nbsp;</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitImport" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?> ><i class="process-icon-upload"></i> <?php echo smartyTranslate(array('s'=>'Import','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'sf','route'=>'admin_international_translations_export_theme'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-upload"></i>
				<?php echo smartyTranslate(array('s'=>'Export a language','d'=>'Admin.International.Feature'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'Export data from one language to a file (language pack).','d'=>'Admin.International.Help'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'Select which theme you would like to export your translations to.','d'=>'Admin.International.Help'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<label class="control-label col-lg-3" for="iso_code"><?php echo smartyTranslate(array('s'=>'Language','d'=>'Admin.Global'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="iso_code" id="iso_code" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="export-theme"><?php echo smartyTranslate(array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="theme-name" id="export-theme" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value==$_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitExport" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>><i class="process-icon-download"></i> <?php echo smartyTranslate(array('s'=>'Export','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8');?>
" method="post" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-copy"></i>
				<?php echo smartyTranslate(array('s'=>'Copy'),$_smarty_tpl);?>

			</h3>
			<p class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'Copies data from one language to another.','d'=>'Admin.International.Help'),$_smarty_tpl);?>
<br />
				<?php echo smartyTranslate(array('s'=>'Warning: This will replace all of the existing data inside the destination language.','d'=>'Admin.International.Help'),$_smarty_tpl);?>
<br />
        <?php echo smartyTranslate(array('s'=>'If necessary [1][2] you must first create a new language[/1].','sprintf'=>array('[1]'=>"<a href=\"-".((string)$_smarty_tpl->tpl_vars['url_create_language']->value)."-\" class=\"btn btn-link\">",'[/1]'=>'</a>','[2]'=>'<i class="icon-external-link-sign"></i>'),'d'=>'Admin.International.Help'),$_smarty_tpl);?>

			</p>
			<div class="form-group">
				<label class="control-label col-lg-3 required" for="fromLang"> <?php echo smartyTranslate(array('s'=>'From','d'=>'Admin.Global'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="fromLang" id="fromLang" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="fromTheme" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value==$_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="toLang"><?php echo smartyTranslate(array('s'=>'To','d'=>'Admin.Global'),$_smarty_tpl);?>
</label>
				<div class="col-lg-4">
					<select name="toLang" id="toLang" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="toTheme" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>>
						<?php  $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->key => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value==$_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<p class="col-lg-12 text-muted required">
					<span class="text-danger">*</span>
					<?php echo smartyTranslate(array('s'=>'Language files must be complete to allow copying of translations.','d'=>'Admin.International.Notification'),$_smarty_tpl);?>

				</p>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitCopyLang" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?> disabled="disabled" <?php }?>><i class="process-icon-duplicate"></i> <?php echo smartyTranslate(array('s'=>'Copy','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>
<script type="text/javascript">
	$(document).ready(function(){
		$('#file-selectbutton').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#file-name').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#importLanguage').change(function(e) {
			if ($(this)[0].files !== undefined)
			{
				var files = $(this)[0].files;
				var name  = '';

				$.each(files, function(index, value) {
					name += value.name+', ';
				});

				$('#file-name').val(name.slice(0, -2));
			}
			else // Internet Explorer 9 Compatibility
			{
				var name = $(this).val().split(/[\\/]/);
				$('#file-name').val(name[name.length-1]);
			}
		});
	});
</script>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>

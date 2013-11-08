<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 17:40:11
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655677005527d13ebc956d4-77031773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb790e70f6bb37d0068d0cb12d251bd62d7f7461' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/paypal/views/templates/hook/column.tpl',
      1 => 1382107165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655677005527d13ebc956d4-77031773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13ebcf0114_63456363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13ebcf0114_63456363')) {function content_527d13ebcf0114_63456363($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
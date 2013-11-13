<?php /* Smarty version Smarty-3.1.14, created on 2013-11-13 12:11:56
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/modules/paypal/views/templates/back/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28502595152835e7cb185c4-99588132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e4dcc5e14a785637512bd475ad25b73494e564' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/paypal/views/templates/back/header.tpl',
      1 => 1382107165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28502595152835e7cb185c4-99588132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52835e7cbb94f5_78336118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52835e7cbb94f5_78336118')) {function content_52835e7cbb94f5_78336118($_smarty_tpl) {?><script type="text/javascript">
    var PayPal_WPS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
';
    var PayPal_HSS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
';
    var PayPal_ECS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
';
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PayPal_module_dir']->value;?>
/views/templates/back/back_office.js"></script><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2013-10-18 16:39:25
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/modules/paypal/views/templates/back/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20103203275261481dad8504-84432182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20103203275261481dad8504-84432182',
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
  'unifunc' => 'content_5261481db1ad30_87314420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261481db1ad30_87314420')) {function content_5261481db1ad30_87314420($_smarty_tpl) {?><script type="text/javascript">
    var PayPal_WPS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
';
    var PayPal_HSS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
';
    var PayPal_ECS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
';
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PayPal_module_dir']->value;?>
/views/templates/back/back_office.js"></script><?php }} ?>
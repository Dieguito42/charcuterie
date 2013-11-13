<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 20:22:03
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812771413527d39dbc8b561-82908243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c1035cf54579aad03780a9382a11d1e29e9209a' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812771413527d39dbc8b561-82908243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d39dbcd86c8_10148144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d39dbcd86c8_10148144')) {function content_527d39dbcd86c8_10148144($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 20:22:03
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645849111527d39dbce1e91-03663289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa38f70baed903bebe429ddac823eddd117fdb35' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645849111527d39dbce1e91-03663289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d39dbd15b77_44118409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d39dbd15b77_44118409')) {function content_527d39dbd15b77_44118409($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>
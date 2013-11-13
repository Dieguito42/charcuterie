<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 19:42:21
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2502739035282768db3eb02-47024130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13077eebeb393aed2a92007a161039b44b0c3c9' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/admin2559/themes/default/template/helpers/list/list_action_enable.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2502739035282768db3eb02-47024130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_enable' => 0,
    'confirm' => 0,
    'enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5282768dc92672_30768061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5282768dc92672_30768061')) {function content_5282768dc92672_30768061($_smarty_tpl) {?>

<a href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>enabled.gif<?php }else{ ?>disabled.gif<?php }?>" alt="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>" />
</a>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2013-11-13 12:36:20
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11248518052836434f24326-59985029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20886965c50306982d978f4965abe9bc90da1ca5' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/store_infos.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11248518052836434f24326-59985029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5283643500e317_21040582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5283643500e317_21040582')) {function content_5283643500e317_21040582($_smarty_tpl) {?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'working hours'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>
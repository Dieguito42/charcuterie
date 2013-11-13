<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 09:39:52
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15691260995281e958352b66-54525608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5319b4b3391ee49927eb33e9574f2b09df83f877' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/category-count.tpl',
      1 => 1382108673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15691260995281e958352b66-54525608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281e9583d2664_90105818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281e9583d2664_90105818')) {function content_5281e9583d2664_90105818($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2013-11-15 18:20:34
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1469470927528657e2150786-07942028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0065ccd8e07f9b97c42ede2fc4509dbb0920a539' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1469470927528657e2150786-07942028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528657e21be1c6_84978297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528657e21be1c6_84978297')) {function content_528657e21be1c6_84978297($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>
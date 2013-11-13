<?php /* Smarty version Smarty-3.1.14, created on 2013-11-12 09:39:53
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16514713995281e959252e27-87203765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060b4be33cb73bd697037c4ce67214fd5fc38f4f' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/product-compare.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16514713995281e959252e27-87203765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'paginationId' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5281e9592f9817_92616378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5281e9592f9817_92616378')) {function content_5281e9592f9817_92616378($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<?php if (!isset($_smarty_tpl->tpl_vars['paginationId']->value)||$_smarty_tpl->tpl_vars['paginationId']->value==''){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
<?php }?>
	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare<?php if (isset($_smarty_tpl->tpl_vars['paginationId']->value)){?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;?>
<?php }?>" class="button bt_compare" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>
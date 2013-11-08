<?php /*%%SmartyHeaderCode:704452308527d13eb9a6b81-31662786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ace2926f8e3ee31b38ff88d64a325f0df38ca89' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blockspecials/blockspecials.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704452308527d13eb9a6b81-31662786',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'mediumSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'specific_prices' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13ebb675c6_83567096',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13ebb675c6_83567096')) {function content_527d13ebb675c6_83567096($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<p class="title_block"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=prices-drop" title="Promotions">Promotions</a></p>
	<div class="block_content">

		<ul class="products clearfix">
			<li class="product_image">
				<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_product=1&amp;controller=product"><img src="http://localhost:8888/charcuterie/prestashop/img/p/1/5/15-medium_default.jpg" alt="" height="58" width="58" title="Test Marion 1" /></a>
			</li>
			<li>
																												<span class="reduction"><span>-5%</span></span>
															
					<p class="s_title_block"><a href="http://localhost:8888/charcuterie/prestashop/index.php?id_product=1&amp;controller=product" title="Test Marion 1">Test Marion 1</a></p>
									<span class="price-discount">199,00 €</span>
					<span class="price">189,05 €</span>
							</li>
		</ul>
		<p>
			<a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=prices-drop" title="Toutes les promos">&raquo; Toutes les promos</a>
		</p>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>
<?php /*%%SmartyHeaderCode:1912741435527d13eb34cbe6-59637953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ea241d8cb39eb482ce114f168ea95b50fd3e5d' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blocksupplier/blocksupplier.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912741435527d13eb34cbe6-59637953',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13eb498eb2_55673351',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13eb498eb2_55673351')) {function content_527d13eb498eb2_55673351($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_supplier=2&amp;controller=supplier" title="En savoir plus sur Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/charcuterie/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://localhost:8888/charcuterie/prestashop/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost:8888/charcuterie/prestashop/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
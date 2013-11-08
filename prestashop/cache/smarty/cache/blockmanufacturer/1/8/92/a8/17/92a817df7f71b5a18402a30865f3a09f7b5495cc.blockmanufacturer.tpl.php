<?php /*%%SmartyHeaderCode:164962611527d13eb1e22e4-52552837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a817df7f71b5a18402a30865f3a09f7b5495cc' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164962611527d13eb1e22e4-52552837',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13eb338964_13876648',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13eb338964_13876648')) {function content_527d13eb338964_13876648($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=manufacturer" title="Fabricants">Fabricants</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost:8888/charcuterie/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost:8888/charcuterie/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer" title="En savoir plus sur Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/charcuterie/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://localhost:8888/charcuterie/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://localhost:8888/charcuterie/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
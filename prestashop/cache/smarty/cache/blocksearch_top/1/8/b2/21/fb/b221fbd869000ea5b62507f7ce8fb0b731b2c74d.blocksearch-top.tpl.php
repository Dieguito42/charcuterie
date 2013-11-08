<?php /*%%SmartyHeaderCode:1005645696527d13ea28ce48-32187679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b221fbd869000ea5b62507f7ce8fb0b731b2c74d' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
    '90e1d73401cf70b9538308ffea3ba99184025ac9' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005645696527d13ea28ce48-32187679',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13ea487248_28405763',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13ea487248_28405763')) {function content_527d13ea487248_28405763($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://localhost:8888/charcuterie/prestashop/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Rechercher" class="button" />
		</p>
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost:8888/charcuterie/prestashop/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>
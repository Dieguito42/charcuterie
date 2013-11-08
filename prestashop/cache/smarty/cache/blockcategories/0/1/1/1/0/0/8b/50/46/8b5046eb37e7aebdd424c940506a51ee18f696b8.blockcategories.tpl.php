<?php /*%%SmartyHeaderCode:1728140633527d13eb0a2502-30191573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b5046eb37e7aebdd424c940506a51ee18f696b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blockcategories/blockcategories.tpl',
      1 => 1383918382,
      2 => 'file',
    ),
    '67fcbc5262afe8fa0869ac6ab9e144ac3a4b6643' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blockcategories/category-tree-branch.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728140633527d13eb0a2502-30191573',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13eb1cae56_42093759',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13eb1cae56_42093759')) {function content_527d13eb1cae56_42093759($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Catégories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_category=3&amp;controller=category" 		title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_category=4&amp;controller=category" 		title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

												
<li >
	<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_category=5&amp;controller=category" 		title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

												
<li class="last">
	<a href="http://localhost:8888/charcuterie/prestashop/index.php?id_category=6&amp;controller=category" 		title="test">test</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
<?php /*%%SmartyHeaderCode:692954765526146da321001-33616442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c5baacc067a1aa35a906efc5b6d0a7232c04af' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1381141710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692954765526146da321001-33616442',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52792464dad713_74134071',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52792464dad713_74134071')) {function content_52792464dad713_74134071($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost:8888/charcuterie/prestashop/index.php', 'charcuteriepallu', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
<?php /*%%SmartyHeaderCode:1976168051527d13ea2121e6-84106741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1976168051527d13ea2121e6-84106741',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13ea2828e7_18529878',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13ea2828e7_18529878')) {function content_527d13ea2828e7_18529878($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost:8888/charcuterie/prestashop/index.php?controller=contact', 'Contactez-nous - charcuteriepallu', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
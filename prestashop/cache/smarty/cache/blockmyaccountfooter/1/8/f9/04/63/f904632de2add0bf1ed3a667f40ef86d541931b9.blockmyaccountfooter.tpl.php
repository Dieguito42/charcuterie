<?php /*%%SmartyHeaderCode:1548121309527d13ebe64638-94580314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f904632de2add0bf1ed3a667f40ef86d541931b9' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1382108675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548121309527d13ebe64638-94580314',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527d13ec052ef5_03832582',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527d13ec052ef5_03832582')) {function content_527d13ec052ef5_03832582($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost:8888/charcuterie/prestashop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost:8888/charcuterie/prestashop/index.php?mylogout" title="Se déconnecter" rel="nofollow">Se déconnecter</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
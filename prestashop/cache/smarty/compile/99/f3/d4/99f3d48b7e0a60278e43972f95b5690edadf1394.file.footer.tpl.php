<?php /* Smarty version Smarty-3.1.14, created on 2013-11-13 16:29:57
         compiled from "/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185870452852839af5da40a1-57541589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f3d48b7e0a60278e43972f95b5690edadf1394' => 
    array (
      0 => '/Applications/MAMP/htdocs/charcuterie/prestashop/themes/test/footer.tpl',
      1 => 1382108673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185870452852839af5da40a1-57541589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52839af5de86c1_09335321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52839af5de86c1_09335321')) {function content_52839af5de86c1_09335321($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>
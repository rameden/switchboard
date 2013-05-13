<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 13:20:18
         compiled from "./templates/_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22577168350bfd3ded5cfb3-92228256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7083f72f8ff47c6cd29cefe3b13f95fb258a04' => 
    array (
      0 => './templates/_nav.tpl',
      1 => 1354818016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22577168350bfd3ded5cfb3-92228256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bfd3ded71166_88385686',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bfd3ded71166_88385686')) {function content_50bfd3ded71166_88385686($_smarty_tpl) {?><div class='nav-bar'>
	<?php $_smarty_tpl->tpl_vars['base_url'] = new Smarty_variable('/~tlferm/database/project/', null, 0);?>
	<a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'>Home</a>
	<a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin'>Admin</a>
	<a href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login'>logout</a>
</div>
<?php }} ?>
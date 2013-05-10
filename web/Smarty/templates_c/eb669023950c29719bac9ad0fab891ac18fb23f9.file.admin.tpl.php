<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 13:19:52
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155261648350c0e1c80d0421-28485421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1354817579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155261648350c0e1c80d0421-28485421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c0e1c8113284_75614187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c0e1c8113284_75614187')) {function content_50c0e1c8113284_75614187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<ul>
		<li><a href="../project/admin/user/edit">Modify user, add a form for them</a></li>
		<li>Add Users</li>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
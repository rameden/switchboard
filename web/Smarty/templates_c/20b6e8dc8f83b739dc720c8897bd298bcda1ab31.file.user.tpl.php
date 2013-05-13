<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 13:42:04
         compiled from "./templates/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87559887850c0e6501f9489-24776969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b6e8dc8f83b739dc720c8897bd298bcda1ab31' => 
    array (
      0 => './templates/user.tpl',
      1 => 1354819314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87559887850c0e6501f9489-24776969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c0e6502cc5e1_80281139',
  'variables' => 
  array (
    'user' => 0,
    'label' => 0,
    'attribute' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c0e6502cc5e1_80281139')) {function content_50c0e6502cc5e1_80281139($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<form>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value){
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
: <input name='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
'></li>	
		<?php } ?>
		</ul>
	</form>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
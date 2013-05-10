<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 15:05:06
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45396719750bfa22ac3aa55-69342440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1354737902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45396719750bfa22ac3aa55-69342440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bfa22ad008b5_64557926',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bfa22ad008b5_64557926')) {function content_50bfa22ad008b5_64557926($_smarty_tpl) {?><html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
			<div class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
		<?php }?>
		<form method='POST'>
			<div>You must log in with your id, not your username.</div>
			<div> Test lawyer account<br>id: 10<br>Password: test</div>
			<div> Test secretary account<br>id: 9<br>Password: test</div>
			<div id='username'>Username: <input name='Id' type='text'></div>
			<div id='password'>Password: <input name='Password' type='password'></div>
			<button type='submit'>Login</button>
		</form>
	</body>
</html>
<?php }} ?>
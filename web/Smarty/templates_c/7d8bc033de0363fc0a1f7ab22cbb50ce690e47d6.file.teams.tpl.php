<?php /* Smarty version Smarty-3.1.12, created on 2012-11-30 17:43:06
         compiled from "./templates/teams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129608896650b934c5bd3180-93808211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8bc033de0363fc0a1f7ab22cbb50ce690e47d6' => 
    array (
      0 => './templates/teams.tpl',
      1 => 1354315353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129608896650b934c5bd3180-93808211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b934c5c94300_10706865',
  'variables' => 
  array (
    'teams' => 0,
    'team' => 0,
    'player' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b934c5c94300_10706865')) {function content_50b934c5c94300_10706865($_smarty_tpl) {?><!doctype html>
<html>
	<head>
		<meta content='charset' charset="utf-8"/>
		<title>LOL Registration</title>
		<link rel="stylesheet" href="css/style.css"/> 
	</head>
	<body>
		<div id='wrapper'>
			<header>
				<span style='font-size:1.5em'>A New Major</span>
				<div class='bigred'> [OF LEGENDS]</div>
				<div class='subhead'> League of Legends Reaches PSU!
					<p>LOL's no laughing matter. Millions of gamers from more than 145 countries play the MOBA-style game League of Legends. It has been 3 years since its launch and the Technology Development Club is proud to bring the first League of Legends tournament to campus.</p>
				</div>
			</header>
			<div class='teams'>
				<div id='team_head'> Registered teams </div>
				<?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
					Team name: <?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
<br />
					Players:
					<ul class='players'>
						<?php  $_smarty_tpl->tpl_vars['player'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['player']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['team']->value['players']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['player']->key => $_smarty_tpl->tpl_vars['player']->value){
$_smarty_tpl->tpl_vars['player']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['player']->value;?>
</li>
						<?php } ?>
					</ul>
					<br />
				<?php } ?>
			</div>
			<footer>
				<div class='red'>For questions and more information check us out at:</div>
				<div class = 'botlink'><a href='http://www.facebook.com/psutechdev'><img src='img/facebook-logo.png' width='32' height='32' />http://www.facebook.com/psutechdev</a><br> </div>
				<div class='red'>or email us at:</div>
				<a href='mailto:psutechdev@gmail.com'><img src='img/gmail-logo.png' width='32' height='32' />psutechdev@gmail.com</a></div>
			</footer>
		</div>
	</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2012-10-24 20:31:09
         compiled from "/home/PLYMOUTH/tlferm/Home/cardFlip/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15623186785088884d125b38-66483039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a2e67d762741cc219005daeca1ee901a4c466a3' => 
    array (
      0 => '/home/PLYMOUTH/tlferm/Home/cardFlip/templates/index.tpl',
      1 => 1349897303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15623186785088884d125b38-66483039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'size' => 0,
    'toDivide' => 0,
    'startOut' => 0,
    'start' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5088884d270700_44661932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5088884d270700_44661932')) {function content_5088884d270700_44661932($_smarty_tpl) {?><html>
	<head>
		<link rel="stylesheet" type="text/css" href="../templates/style.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			size = <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
;
		</script>
		<script src="../js/main.js"></script>
		<?php $_smarty_tpl->tpl_vars['toDivide'] = new Smarty_variable(100-$_smarty_tpl->tpl_vars['size']->value, null, 0);?>
		<style>
			.front{
				width: 100%;	
				height: 100%;
			}
			.back{
				width: 100%;	
				height: 100%;
			}
			.card{
				width: <?php echo $_smarty_tpl->tpl_vars['toDivide']->value/$_smarty_tpl->tpl_vars['size']->value;?>
%;	
				height: <?php echo $_smarty_tpl->tpl_vars['toDivide']->value/$_smarty_tpl->tpl_vars['size']->value;?>
%;
			}		
		</style>
	</head>
	<body>
		<div class="header">
		</div>
		<div class="project_container">
			<?php $_smarty_tpl->tpl_vars['startOut'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['startOut']->step = 1;$_smarty_tpl->tpl_vars['startOut']->total = (int)ceil(($_smarty_tpl->tpl_vars['startOut']->step > 0 ? $_smarty_tpl->tpl_vars['size']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['size']->value)+1)/abs($_smarty_tpl->tpl_vars['startOut']->step));
if ($_smarty_tpl->tpl_vars['startOut']->total > 0){
for ($_smarty_tpl->tpl_vars['startOut']->value = 1, $_smarty_tpl->tpl_vars['startOut']->iteration = 1;$_smarty_tpl->tpl_vars['startOut']->iteration <= $_smarty_tpl->tpl_vars['startOut']->total;$_smarty_tpl->tpl_vars['startOut']->value += $_smarty_tpl->tpl_vars['startOut']->step, $_smarty_tpl->tpl_vars['startOut']->iteration++){
$_smarty_tpl->tpl_vars['startOut']->first = $_smarty_tpl->tpl_vars['startOut']->iteration == 1;$_smarty_tpl->tpl_vars['startOut']->last = $_smarty_tpl->tpl_vars['startOut']->iteration == $_smarty_tpl->tpl_vars['startOut']->total;?>
				<?php $_smarty_tpl->tpl_vars['start'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['start']->step = 1;$_smarty_tpl->tpl_vars['start']->total = (int)ceil(($_smarty_tpl->tpl_vars['start']->step > 0 ? $_smarty_tpl->tpl_vars['size']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['size']->value)+1)/abs($_smarty_tpl->tpl_vars['start']->step));
if ($_smarty_tpl->tpl_vars['start']->total > 0){
for ($_smarty_tpl->tpl_vars['start']->value = 1, $_smarty_tpl->tpl_vars['start']->iteration = 1;$_smarty_tpl->tpl_vars['start']->iteration <= $_smarty_tpl->tpl_vars['start']->total;$_smarty_tpl->tpl_vars['start']->value += $_smarty_tpl->tpl_vars['start']->step, $_smarty_tpl->tpl_vars['start']->iteration++){
$_smarty_tpl->tpl_vars['start']->first = $_smarty_tpl->tpl_vars['start']->iteration == 1;$_smarty_tpl->tpl_vars['start']->last = $_smarty_tpl->tpl_vars['start']->iteration == $_smarty_tpl->tpl_vars['start']->total;?>
					<span id="block" data-row="<?php echo $_smarty_tpl->tpl_vars['startOut']->value;?>
" data-col="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="card row<?php echo $_smarty_tpl->tpl_vars['startOut']->value;?>
 col<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
">
							<span class="front side"></span>
							<span class="back side"></span>
					</span>
				<?php }} ?>
				<br />
			<?php }} ?>
		</div>
	</body>
</html>
<?php }} ?>
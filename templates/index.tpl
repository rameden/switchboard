<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <title>PSU Switchboard</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script src="{$base_url}/js/bootstrap-dropdown.js"></script>
    <script src="{$base_url}/js/chosen.jquery.js"></script>
		<script src="{$base_url}/js/bootstrap-tab.js"></script>
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/main.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/chosen.css" />
    {* <link rel="stylesheet" type="text/css" href="fixedMenu_style1.css" /> *}
    <link rel="shortcut icon" href="{$base_url}/img/favicon.ico">
<!-- Chosen Script -->
		<script src="{$base_url}/js/behavior.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	</head>
		<body>
		{include file='_nav.tpl'}
		<div class="container-fluid">
		<div class="row-fluid">
       	
	<div class="span12">
  	<div class="hero-unit">
  		<div class="hero-unit">
				<div id = "wrapper">
        	<div id="header">
    				<blockquote><h1 class="lead">Switchboard</h1>
    					<small>Plymouth State University</small>
    				</blockquote>
    			</div>       
						<div id="search">    
               <!--creating drop down items-->
               <select data-placeholder="Click to Start Search" class="chzn-select" tabindex="2" style="width:350px;">
               <option value=""></option>  
							 {foreach from=$options item=option}
									{foreach from=$option item=op}
										<option value=""></option>
										<optgroup label="{$op["main"]["leading_letter"]}">
										{foreach from=$op["options"] item=ops}
											<option>{$ops->department} {$ops->phone_number}</option>
										{/foreach}
										</optgroup>
									{/foreach}
								{/foreach}							 
								</select>
								<br></br>
							</div>
						</div>
					</div> 
				</div> 
			{include file='news.tpl'}
			{include file='footer.tpl'}
	</body>			
</html>

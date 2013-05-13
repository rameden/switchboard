<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <title>PSU Switchboard Admin</title>

    <link href="{$base_url}/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{$base_url}/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/main.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/jquery.gritter.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="{$base_url}/js/admin.js"></script>
    <script src="{$base_url}/js/jquery.gritter.min.js"></script>
	</head>
	<body>
		<script>
			base_url = "{$base_url}";
		</script>
		{include file='_nav.tpl'}
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="hero-unit">
						 <p>
								The order of the fields is Department Name, Department Phone Number.
						 </p>
						 <ul>
						 {foreach from=$options item=option}
							{foreach from=$option item=op}
								<li>{$op["main"]["leading_letter"]}</li>
								<ul>
								{foreach from=$op["options"] item=ops}
									<li><span id="{$ops->id}"><input class="department" value="{$ops->department}"> <input class="phone_number" value="{$ops->phone_number}"> <button class="btn edit">Edit</button> <button class="btn delete">Delete</button></span></li> 
								{/foreach}
								</ul>
							{/foreach}
						{/foreach}					
						</ul>
					</div>
					<div class="hero-unit">
						<h3>Add New Option</h3>
						<form method="post" action="{$base_url}/admin/add">
						<ul>
							<li>Department: <input name="department"></li>
							<li>Phone Number: <input name="phone_number"></li>
							<li><input type="submit" value="add" class="btn"></li>
						</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
		{include file='footer.tpl'}
	</body>
</html>

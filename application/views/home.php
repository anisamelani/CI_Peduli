 <!DOCTYPE html>
<html>

	<head>
		<title>LANDING PAGE</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css?v=<?php echo rand(0,9999);?>" type="text/css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		<div id="kotak">
			<div class="nav">
				
				<div class="nav-bar">
					<ul>
						<li><a href="<?php echo base_url('dashboard/index'); ?>">Beranda</a></li>
						<li><a href="<?php echo base_url('dashboard/kamar'); ?>">Kamar</a></li>
						<li><a href="<?php echo base_url('dashboard/kontak'); ?>">Kontak</a></li>
						<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
					</ul>
				</div>
			</div>
			<div id="kotak2">
				<div id="kotak2-left">
					<h1>LUXURY HOTEL</h1>
					<h4>Affordable,Elegant,Modern </h4>
				</div>
				
			</div>
		</div>
	<body>
</html>
 <!DOCTYPE html>
<html>

	<head>
		<title>LANDING PAGE</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css?v=<?php echo rand(0,9999);?>" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main2.css?v=<?php echo rand(0,9999);?>" type="text/css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<style>
				
		</style>
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
		<div class="container">
		
			<div class="flex-container">
				<div class="img">
					<img src="<?php echo base_url(); ?>assets/images/sg.jpg">
				</div>
				<div class="keterangan">
					<h1>Single Room</h1>
					<p>Jenis kamar hotel tipe ini memiliki satu tempat tidur single untuk satu orang.</p>
				</div>
			</div>
			
			<div class="flex-container">
				<div class="img">
					<img src="<?php echo base_url(); ?>assets/images/twin.jpg">
				</div>
				<div class="keterangan">
					<h1>Twin Room</h1>
					<p>Jenis kamar hotel ini memiliki dua tempat tidur dengan sandaran kepala yang dimaksud untuk hunian ganda.</p>
				</div>
			</div>
			
			<div class="flex-container">
				<div class="img">
					<img src="<?php echo base_url(); ?>assets/images/tiga.jpg">
				</div>
				<div class="keterangan">
					<h1>Triple Room</h1>
					<p>Jenis kamar hotel ini terdiri dari tiga tempat tidur single terpisah untuk tiga orang. </p>
				</div>
			</div>
			
		</div>
	</body>
</html>
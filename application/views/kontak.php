 <!DOCTYPE html>
<html>

	<head>
		<title>LANDING PAGE</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main.css?v=<?php echo rand(0,9999);?>" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/main1.css?v=<?php echo rand(0,9999);?>" type="text/css">
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
			<h1>Contact Us</h1>

			<?php
			if($this->input->get('err')!=null){
				echo $this->input->get('err');
			}
			?>

			<form method="post" action="<?php echo base_url('login/cek'); ?>">
			 <img src="https://dosenit.com/wp-content/uploads/2021/03/google_maps.jpg" style="width:100%">
				<div class="form-group">
					<label for="user_nama">Nama Lengkap</label>
					 <textarea id="Message" name="Message" class="fcf-form-control" rows="1" maxlength="3000" required placeholder="Masukkan Nama Lengkap"></textarea>
				</div>
				
				<div class="form-group">
					<label for="user_nama">Alamat Lengkap </label>
					 <textarea id="Message" name="Message" class="fcf-form-control" rows="1" maxlength="3000" required placeholder="Masukkan Alamat Lengkap"></textarea>
				</div>
			
				<div class="form-group">
					<label for="user_nama">Subjek </label>
					 <textarea id="Message" name="Message" class="fcf-form-control" rows="5" maxlength="3000" required placeholder="Masukkan Text"></textarea>
				</div>
			

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			

		</div>
		</div>
	</body>
</html>
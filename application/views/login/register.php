<!DOCTYPE html>
<html lang="en">
	<head>
		<link
		rel="stylesheet"
		href="<?php echo base_url('assets/libraries/bootstrap/css/bootstrap.css'); ?>"
    />
		<style>
			.container {
				position: absolute;
				left: 500px;
				top: 150px;
				width: 200px;
				border: 1px solid #5d5555;
				margin: 20px auto;
				background:#fff;
				padding:20px;
				border-radius: 10px;
			}
			.form-group{
				margin-bottom: 15px;
				display:flex;
				flex-direction: column;
			}
		</style>
	</head>
	<body>

		<div class="container">
			<h1>Luxury Hotel</h1>

			<?php
			if($this->input->get('err')!=null){
				echo $this->input->get('err');
			}
			?>

			<form action="<?php echo base_url('login/register_simpan'); ?>" 
			method="post">
				
				<div class="form-group">
					<label for="user_nama">Nama</label>
					<input type="text" name="user_nama" class="form-control" id="user_nama" placeholder="Masukkan Nama Lengkap">
				</div>
			
				<div class="form-group">
					<label for="user_password">Password</label>
					<input type="text" name="user_password" class="form-control" id="user_password" placeholder="Masukkan Password">
				</div>
				
				<div class="form-group">
					<label for="user_alamat">Alamat</label>
					<input type="text" name="user_alamat" class="form-control" id="user_alamat" placeholder="Masukkan Alamat Lengkap">
				</div>
				</br>
				<button type="submit" class="btn btn-primary">Simpan</button>
				
			</form>
			
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOME</title>
		<style>
			.container {
				position: absolute;
				left: 30px;
				top: 150px;
				width: 400px;
				border: 1px solid #5d5555;
			}
		</style>
	</head>
	
	<body>
		<div class="header">
			<h1>Dashboard</h1>
			<hr/>
			
			<hr/>
		</div>
		<div class="h3">
			<h3>Selamat datang <?php echo ucwords(strtolower($_SESSION['user_nama'])); ?> di Luxury Hotel</h3>
		</div>
	</body>
	
</html>
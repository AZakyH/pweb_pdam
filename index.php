<!DOCTYPE html>
<html>
<head>
	<title>Form Pembayaran PDAM</title>
	<link rel="stylesheet" type="text/css" href="pdam.css">
	<script src="login.js"></script>
</head>
<body>
	<center><h2>Form Pembayaran PDAM</h2></center>
	<div class="login">
		<form action="hasil.php" method="POST">
			<div>
				<label>Nomor Pelanggan	:</label> <input type="text" name="nopel"/><br>
			</div>
			<div>
				<label>Nama				:</label> <input type="text" name="nama"/><br>	
			</div>
			<div>
				<label>Daerah			:</label> <input type="text" name="daerah"/><br>	
			</div>
			<div>
				<label>Meteran awal		:</label> <input type="number" name="awal"/><br>	
			</div>
			<div>
				<label>Meteran akhir	:</label> <input type="number" name="akhir"/><br>	
			</div>
			<div>
				<label>Harga			:</label> <input type="text" name="harga"/><br>	
			</div>
			<input type="submit" name="Input" value="Input">
		</form>
	</div>
</body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Form Pembayaran PDAM</title>
</head>
<body>
		<h1>Form Pembayaran PDAM</h1><br>

		<div class="data">
		<form action="hasil.php" method="post" name="input">
			<div>
				<label>Nomor Pelanggan	:</label> <input type="text" name="nopel"/><br>
			</div>
			<div>
				<label>Nama				:</label> <input type="text" name="nama"/><br>	
			</div>
			<div>
				<label>Daerah			:</label> <input type="text" name="daerah"/><br>	
			</div>
			<div>
				<label>Meteran awal		:</label> <input type="number" name="awal"/><br>	
			</div>
			<div>
				<label>Meteran akhir		:</label> <input type="number" name="akhir"/><br>	
			</div>
			<div>
				<label>Harga			:</label> <input type="text" name="harga"/><br>	
			</div>
			<input type="submit" name="Input" value="Input">
		</form>

		</div>
</body>
</html> -->

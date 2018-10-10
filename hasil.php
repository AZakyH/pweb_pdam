<!-- <!DOCTYPE html>
<html>
<head>
	<title>Data Pembayaran</title>
</head>
<body>
	<?php
	if (isset($_POST['Input']))
	{
		$nopel = $_POST['nopel'];
		$nama = $_POST['nama'];
		$daerah = $_POST['daerah'];
		$awal = $_POST['awal'];
		$akhir = $_POST['akhir'];
		$pemakaian = $akhir - $awal;
		$harga = $_POST['harga'];
		$total = $pemakaian * $harga;
		echo "<b>Tagihan dari :</b> <br>";
		echo $nopel. "<br>";
		echo $nama. "<br>";
		echo $daerah. "<br>";
		echo $pemakaian. "<br>";
		echo $harga. "<br>";
		echo $total. "<br>";
	}
	?>

	<h1>Tagihan Milik :</h1>
</body>
</html>
 -->
<!DOCTYPE html>
<html>
	<head>
	<title>Data Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="hasil.css">
</head>
<body>
	<?php
	if (isset($_POST['Input']))
	{
		$nopel = $_POST['nopel'];
		$nama = $_POST['nama'];
		$daerah = $_POST['daerah'];
		$awal = $_POST['awal'];
		$akhir = $_POST['akhir'];
		$pemakaian = $akhir - $awal;
		$harga = $_POST['harga'];
		$total = $pemakaian * $harga;
	}
	?>
	<div class="header">
		<div class="jarak">
			<h2>INFORMASI TAGIHAN</h2>
		</div>
	</div>
	<div class="menu">
		<h3 style="color: white; text-align: center;">Terima kasih atas pembayarannya</h3>
	</div>
	<div class="content">
		<div class="jarak">
				<!-- kiri -->
				<div class="kiri">
					<!-- blog -->
					<div class="border">
						<div class="jarak">
							<h3>Data Pelanggan</h3>
							<p>
								Nama : <?php echo $nama. "<br>"; ?>
								Nomor Pelanggan : <?php echo $nopel. "<br>"; ?>
								Daerah : <?php echo $daerah. "<br>"; ?>
								Meteran Awal : <?php echo $awal. "<br>"; ?>
								Meteran Akhir : <?php echo $akhir. "<br>"; ?>
								Harga : <?php echo $harga. "<br>"; ?>
							</p>
						</div>
					</div>
					<!-- end blog -->
					<!-- blog -->
					<div class="border">
						<div class="jarak">
							<h3>Tagihan :</h3>
							<p>
								Pemakaian : <?php echo $pemakaian. "<br>"; ?>
								Total Pembayaran : <?php echo $total. "<br>"; ?>
							</p>
						</div>
					</div>
				<!-- end blog -->
				</div>
			<!-- kiri -->
			<!-- kanan -->
			<div class="kanan">
				<div class="jarak">
					<h3>KATEGORI</h3>
					<hr/>
					<p><a href="#" class="undercor">M1</a></p>
					<p><a href="#" class="undercor">M2</a></p>
					<p><a href="#" class="undercor">M3</a></p>
					<p><a href="#" class="undercor">M4</a></p>
					<p><a href="#" class="undercor">M5</a></p>
					<p><a href="#" class="undercor">M6</a></p>
					<p><a href="#" class="undercor">M7</a></p>
				</div>
			</div>
			<!-- kanan -->
		</div>
	</div>
	<div class="footer">
		<div class="jarak">
			<p style="text-align: center;">Perusahaan Daerah Air Minum</p>

		</div>
	</div>
</body>
</html>
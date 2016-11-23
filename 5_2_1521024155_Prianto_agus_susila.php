<!DOCTYPE html>
<html lang="en">
<head>
	<title>Studi Kasus 5_2</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h3>Studi Kasus 5_2</h3>
	<?php
	$barang = array
		(
			array("1001","Sabun Lifebuoy","Rp. 1.500,-"),
			array("1002","Permen Blaster","Rp. 5.600,-"),
			array("1003","Pasta Gigi Pepsodent","Rp. 4.560,-"),
			array("1004","Madu Arbain","Rp. 30.000,-"),
			array("1005","Kecap ABC","Rp. 7.250,-"),
			array("1006","Saus Tomat","Rp. 6.700,-"),
			array("1007","Gula Gulaku","Rp. 8.900,-"),
			array("1008","Rinso","Rp. 7.100,-"),
			array("1009","Super Pel","Rp. 6.450,-"),
			array("1010","Permen Tango","Rp. 5.600,-")
		); 
		echo "<table class='table table-hover'>";
		echo "<tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga</th></tr>";
		foreach ($barang as $rows => $row){
			echo "<tr>";
			foreach ($row as $col => $cell)
			{
				echo "<td>" . $cell . "</td>";
			}
		}
		echo "</tr></table>";
	?>
	</div>
</body>
</html>
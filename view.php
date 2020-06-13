<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD - View</title>
</head>
<body>
	<h1>View Product</h1>
	<?php
		include 'connect.php';
		$getProduct = $connection -> query("SELECT * FROM product");
		while($fetchProduct = $getProduct -> fetch_assoc()){
		?>

		<table style="display:inline-table;width: 200px">
			<tr>
				<td><img style="width: 100%" src="<?=$fetchProduct["productImage"]?>"></td>
			</tr>
			<tr>
				<td>
					<strong>Nama produk : <?=$fetchProduct["productName"]?></strong><br>
					IDR : <?=number_format($fetchProduct["productPrice"])?><br>
					description : <?=$fetchProduct["productDescription"]?>
				</td>				
			</tr>
		</table>

		<?php
		}
	?>
</body>
</html>
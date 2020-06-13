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

		<table style="inline-table">
			<tr>
				<td><img src="<?=$fetchProduct["productImage"]?>"></td>
			</tr>
		</table>

		<?php
		}
	?>
</body>
</html>
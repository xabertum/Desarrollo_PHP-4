<?php
include 'assets/connection.php';

$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);

$suma_total = 0;
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style type="text/css">

.wrapper-table {
	position: relative;
	left: 20%;
}


#table {
	text-align:center;

}

</style>
</head>

<body>
	<div class="container">
		
			<div class="wrapper-table">
				<h1>Carrito de la compra</h1>			
				<table id="table" border="1">
					<tr>
						<th>Nombre Producto</th>
						<th>Cantidad</th>
						<th>Precio unidad</th>
						<th>Total</th>
					</tr>
					<?php
					if ($resultado->num_rows > 0) {

						while ($filas = $resultado->fetch_assoc()) {

							if ($filas['cantidad'] >= 1) {

								echo '<tr>';
								echo '<td>';
								echo $filas['nombre'];
								echo '</td>';
								echo '<td>';
								echo $filas['cantidad'];
								echo '</td>';
								echo '<td>';
								echo $filas['precio'] . "&euro;";
								echo '</td>';
								echo '<td>';
								echo $total = $filas['precio'] * $filas['cantidad'] . "&euro;";
								echo '</td>';
								echo '</tr>';

								$suma_total += $total;
							}
						}
					}
					echo '<tr>';
					echo '<td>';
					echo "";
					echo '</td>';
					echo '<td>';
					echo "";
					echo '</td>';
					echo '<td>';
					echo "";
					echo '</td>';
					echo '<td style="color: red;">';
					echo $suma_total . "&euro;";
					echo '</td>';
					echo '</tr>';
					?>
					</table>
			</div>

			<div class="wrapper-table">
			
			
			
			
			</div>


	</div>
</body>

</html>
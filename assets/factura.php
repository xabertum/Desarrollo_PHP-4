<?php
include 'assets/connection.php';

$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);
$suma_total = 0;

$sql_clientes = "SELECT * FROM datos_comprador";
$resultado_clientes = $conn->query($sql_clientes);

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style type="text/css">


#table {
	text-align: center;

}
img {
	float: right;
		
}
</style>
</head>

<body>
	<div class="container">

	<img src="images/logo.jpg">
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
			<h1>Datos de facturación</h1>
				<table id="table" border="1">
					<tr>
						<th>Nombre</th>
						<th>apellidos</th>
						<th>DNI</th>
						<th>Telefono</th>
						<th>Dirección</th>
						<th>email</th>
					</tr>
					<?php
					if ($resultado_clientes->num_rows > 0) {
						while ($filas_cliente = $resultado_clientes->fetch_assoc()) {

							echo '<tr>';
							echo '<td>';
							echo $filas_cliente['nombre'];
							echo '</td>';
							echo '<td>';
							echo $filas_cliente['apellidos'];
							echo '</td>';
							echo '<td>';
							echo $filas_cliente['dni'];
							echo '</td>';
							echo '<td>';
							echo $filas_cliente['telefono'];
							echo '</td>';
							echo '<td>';
							echo $filas_cliente['direccion'];
							echo '</td>';
							echo '<td>';
							echo $filas_cliente['email'];
							echo '</td>';
							echo '</tr>';
						}
					}

					?>
				</table>

			</div>

			<div>
				<h3>Datos de contacto de ELECTROSTORE</h3>
				<ul>
					<li>
						Nombre: ELECTROSTORE AR
					</li>
					<li>
						Direccion: Pasteur 359 5º B (C.A.B.A) 
					</li>
					<li>
						Horarios de Atención: Lunes a Viernes de 9:30 a 17hs 
					</li><li>
						Teléfono: (011) 2010-9472
					</li><li>
						Email: ventas@electro-store.net 
					</li>
				</ul>
				




			</div>


	</div>
</body>

</html>
<?php
include 'Producto.php';
include 'assets/connection.php';

/* Variables que nos pasan los detalles de cada producto */
$cantidades = $_POST['cantidad'];
$productos = $_POST['producto'];

$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">

<link rel="stylesheet" href="css/compra.css">
</head>

<body>

	<section class="text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Album example</h1>
			<div class="text-center">
				<table id="table" border="1">
					<tr>
						<th>Nombre Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
					</tr>

            <?php
            if (isset($cantidades)) {
                    
                    if ($resultado->num_rows > 0) {
                        
                        while ($filas = $resultado->fetch_assoc()) {
                            
                            if ($filas['precio'] > 100) {
                                
                                echo '<tr>';
                                echo '<td>';
                                
                                echo $filas['nombre'];
                                
                                echo '</td>';
                                echo '<td>';
                                
                                echo $filas['cantidad'];
                                
                                echo '</td>';
                                echo '<td>';
                                
                                echo $filas['precio'];
                                
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                    }
                }
            
            ?>
				</table>

			</div>
		</div>
	</section>




	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>
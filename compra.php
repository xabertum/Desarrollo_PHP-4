<?php
include 'Producto.php';

$cantidades = $_POST['cantidad'];
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
</head>

<body>

	<section class="text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Album example</h1>
			<div class="text-center">

            <?php
            if (isset($cantidades)) {
                echo '<table border="1">';
                echo '<tr>
					<th>Nombre Producto</th>
					<th>Cantidad</th>
				</tr>';
                foreach ($cantidades as $cantidad) {
                    
                    $producto = new Producto();
                    $producto->setCantidad($cantidad);
                    $producto->setNombre("Producto_1");
                    
                    echo '<tr>
					<td>Row 1: Col 1</td>
					<td>';
                    echo $producto->getCantidad();
                    '</td>
				</tr>';
                }
            }
            
            ?>                        
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
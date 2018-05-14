<?php
include_once 'assets/connection.php';

if (isset($_POST['datos_comprador'])) {
    
    $datos_comprador = $_POST['datos_comprador'];    
    $toString = implode("','", $datos_comprador);       
    
    $sql = "INSERT INTO datos_comprador (nombre, apellidos, dni, telefono, direccion, email, profesion)
            VALUES ('$toString')";
    
    $conn->query($sql);
}

?>

<!DOCTYPE doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no"
	name="viewport">
<title>Signin Template for Bootstrap</title>
<!-- Bootstrap core CSS -->
<link crossorigin="anonymous"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/login-custom.css" rel="stylesheet">

</head>
<body class="text-center">
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"
		class="form-signin" method="POST">
		<h1 class="h3 mb-3 font-weight-normal">Introduzca sus datos</h1>
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Nombre" required type="text">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Apellidos" required type="text">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="DNI" required type="text">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Telefono" required type="text">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Direccion" required type="text">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Correo electronico" required type="email">
			<input autofocus class="form-control" name="datos_comprador[]" placeholder="Profesion" type="text">
			<br>
		<button class="btn btn-lg btn-primary" type="submit">Aceptar</button>
	</form>

</body>
</html>



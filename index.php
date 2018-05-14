<?php
include 'assets/connection.php';

/* Variables que especifican cantidad y producto */
if (isset($_POST['cantidad']) && isset($_POST['id'])) {
    
    $productos = $_POST['id'];
    $cantidades = $_POST['cantidad'];
}
/* SQL para setear cantidad de cada producto */

if (isset($productos) && isset($cantidades)) {
    
    for ($i = 0; $i <= count($productos) - 1; $i ++) {
        
        $sql = "UPDATE productos SET cantidad = '$cantidades[$i]' WHERE id = '$productos[$i]'";
        $conn->query($sql);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Album example for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">


<!-- Custom styles -->
<link href="css/index-custom.css" rel="stylesheet">
</head>

<body>
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">About</h4>
						<p class="text-muted">Add some information about the album below,
							the author, or any other background context. Make it a few
							sentences long so folks can pick up some informative tidbits.
							Then, link them off to some social networking sites or contact
							information.</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contact</h4>
						<ul class="list-unstyled">
							<li><a href="#" class="text-white">Follow on Twitter</a></li>
							<li><a href="#" class="text-white">Like on Facebook</a></li>
							<li><a href="#" class="text-white">Email me</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark box-shadow">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center"> <strong>Electro-Tienda</strong>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarHeader" aria-controls="navbarHeader"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</header>

	<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Electro-Tienda</h1>
			<p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Integer nulla nibh, pellentesque sit amet ipsum vel, scelerisque feugiat tellus. 
			Nam nec vehicula nunc, at vestibulum est. 
			urna mauris at risus. Morbi hendrerit,</p>


			<form action="compra.php" id="carrito_form" method="post">
				<input class="btn btn-primary" type="submit" value="Carrito de la compra">
			</form>

			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"
				id="cesta-compra" method="post"></form>


		</div>
	</section>
	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/2.jpg" class="card-img-top" alt="Card image cap">
						<div class="card-body">
							<p class="product-name text-center">Nikon Coolpix S23</p>
							<p class="text-center">100&euro;</p>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla nibh.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div>
									Cantidad: <input type="number" name="cantidad[]"
										style="width: 20%" min="1" form="cesta-compra"> <input
										type="hidden" name="id[]" value="1" form="cesta-compra"> <input
										class="btn btn-primary boton-agregar" type="submit"
										value="Agregar" form="cesta-compra">
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/f2.jpg" class="card-img-top" alt="Card image cap">
						<div class="card-body">
							<p class="product-name text-center">Fujifilm FinePix S2950</p>
							<p class="text-center">200&euro;</p>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla nibh.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div>
									Cantidad: <input type="number" name="cantidad[]" style="width: 20%" min="1" form="cesta-compra">
									  <input type="hidden" name="id[]" value="2" form="cesta-compra">
									  <input class="btn btn-primary boton-agregar" type="submit" value="Agregar" form="cesta-compra">
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/4.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="product-name text-center">Canon PowerShot SX710 HS </p>
							<p class="text-center">300&euro;</p>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla nibh.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div>
									Cantidad: <input type="number" name="cantidad[]"
										style="width: 20%" min="1" form="cesta-compra"> <input
										type="hidden" name="id[]" value="3" form="cesta-compra"> <input
										class="btn btn-primary boton-agregar" type="submit"
										value="Agregar" form="cesta-compra">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/6.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/7.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/8.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/11.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/12.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img src="images/2.jpg" class="card-img-top"
							data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
							alt="Card image cap">
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text
								below as a natural lead-in to additional content. This content
								is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</main>

	<footer class="text-muted">
		<div class="container">
			<p class="float-right">
				<a href="#">Back to top</a>
			</p>
			<p>Album example is &copy; Bootstrap, but please download and
				customize it for yourself!</p>
			<p>
				New to Bootstrap? <a href="../../">Visit the homepage</a> or read
				our <a href="../../getting-started/">getting started guide</a>.
			</p>
		</div>
	</footer>

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
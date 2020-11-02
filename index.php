<?php
session_start();
?>
<html>
	<head>
		<title>CRUD: Crear, Leer, Actualizar y Borrar</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2>CRUD: CREATE, RETRIEVE, UPDATE &amp; DELETE</h2>
			<p class="lead">Ejemplo de ver, agregar, actualizar, eliminar con PHP, MySQL, CSS, JavaScript y BootStrap</p>
			<p>Pasos:</p>
			<ol>
				<a href="ver.php"><li>Ir a la opcion ver.</li></a>
				<li>Agregar elementos desde el boton agregar.</li>
				<li>Seleccionar el boton Editar de cualquier elemento.</li>
				<li>Seleccionar el boton Eliminar de cualquier elemento.</li>
			</ol>
			<br>
			<ul type="none">
			<li><i class="glyphicon glyphicon-ok"></i>Un completo panel de control de acceso a la base de datos</li>
		
			</ul>

	</div>
	</div>
	</div>
	</body>
</html>
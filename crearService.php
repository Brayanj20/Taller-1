<?php 

include("conexionDb.php");

if (isset($_POST['registra'])) {
    if (strlen($_POST['name']) >= 1 &&
	 	strlen($_POST['email']) >= 1 &&
		strlen($_POST['telefono']) >= 1 &&
		strlen($_POST['curso']) >= 1
		) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['telefono']);
		$curso = trim($_POST['curso']);
	    $consulta = "INSERT INTO user VALUES ('$name','$email','$telefono','$curso')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
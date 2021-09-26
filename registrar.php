<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		$message = trim($_POST['message']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(name_surname, email, phone, notes, reg_date) VALUES ('$name','$email','$phone','$message','$fechareg')";

		

	    $resultado = mysqli_query($conex,$consulta);

		
	    if ($resultado) {
	    	?> 			
			echo '<script language="javascript">alert("Thanks for your Message");</script>';
           <?php
	    } else {
	    	?> 
	    	echo '<script language="javascript">alert("Something went wrong");</script>';
           <?php
	    }
    }   
    }



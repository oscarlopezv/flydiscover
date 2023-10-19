<?php
//print_r($_POST);
extract($_POST);
$name=uniqid('',true);
switch ($id){
	case "Subir":
	  if (move_uploaded_file($_FILES['archivo']['tmp_name'], "../archivos/".$name.$archivo)) {
	  	echo '{"newName":"'.$name.$archivo.'","oldName":"'.$_FILES['archivo']['name'].'"}';
	  } else {
		  echo "¡Posible ataque de carga de archivos!\n".$_FILES['archivo']['tmp_name'];
	  }
	  
    break;
	case "Eliminar":
		if (unlink('../images/'.$archivo)){
		} else {
			echo "No se pudo eliminar";
		}
	break;
}
?>
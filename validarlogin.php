<?php
session_start();

if ($_SESSION["usuariop"]!='' && isset($_SESSION["usuariop"])){
    
} else {
    if ($row["promocion"]!=1){
        echo "<script> document.location.href='login.php' </script>";
    }
}
?>
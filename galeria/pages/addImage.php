<?php
session_start();
ob_start();
if($_SESSION['global']==0)
{
header("Location:../../login.php");
}




?>

<?php

  include '../vista/formAdd.php';


?>
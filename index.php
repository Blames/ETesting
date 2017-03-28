<?php 
 if (empty($_GET))
 {
 	require_once ('controllers/HomeController.php');
 	$home = new HomeController();
 	$home->homepage();
 }

// SERT PEUT ETRE A QUE DALLE.

 ?>
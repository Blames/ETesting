<?php 

class HomeController{
	public function homepage()
	{
		
		require_once('Models/HomeModel.php');
		$modelCopain = new HomeModel();
		$listCopain = 	$modelCopain->listeCopains();
		require_once('Views/homepage.php');
		}
}

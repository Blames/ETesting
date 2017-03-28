<?php 

class HomeController{
	public function homepage()
	{
		
		require_once('Models/HomeModel.php');
		$modelCopain = new HomeModel();
		$listCopain = 	$modelCopain->listeCopain();
		require_once('Views/homepage.php');
		}
}

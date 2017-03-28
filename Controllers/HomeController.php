<?php 

class HomeController{
	public function homepage()
	{
		
		require_once('Models/HomeModel.php');
		$modelPokemon = new HomeModel();
		$listPokemon = 	$modelPokemon->listeCopain();
		require_once('Views/homepage.php');
		}
}

<?php 

class HomeModel
{
	
	public function listeCopains()
	{
		require_once ('classes/db.php');
		$instanceDb = DB::getInstance();
		$query = $instanceDb->bdd->query('SELECT * FROM copain');
		$results = $query->fetchall();
		return $results;
	}
}

 ?>
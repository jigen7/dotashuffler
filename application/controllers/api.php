<?php

class Api_Controller extends Base_Controller {

	public function action_index()
	{
		//return View::make('home.index');
		
		echo "Paolo Marco Manarang";
	}
	
	public function action_shuffle()
	{
		
		    $players = array();
			/*
			$players[] = "Paolo";
			$players[] = "Reemer";
			$players[] = "Kuya";
			$players[] = "JC";
			$players[] = "Tet";
			$players[] = "Mike";
			$players[] = "Alvin";
			$players[] = "Paulo";
			$players[] = "Russel";
			$players[] = "Khail";
			*/
			$players = array("Paolo","JR","Bryan","Russel","Tet","Kuya","Chet","Mike","Erik","Jef","John","Mich","Dj","Pando");
			
			foreach($players as $player){
			
			echo $player."<br>";
			
			}
			echo "<br>";
			echo "Player Count :".count($players);
			echo "<br>Shuffling....";
			echo "<br><br>Shuffle Team<br><br>";
			
			shuffle($players);
			$count = 1;
			echo "<b>Team 1</b><br>";
			foreach($players as $player){
			
			
			echo $count.". ".$player."<br>";
			if($count == 7){ 
			$count = 0;
			echo "<br><br><b>Team 2</b><br>";
			};
			
			$count++;
			
			}
			
		    
	}

}
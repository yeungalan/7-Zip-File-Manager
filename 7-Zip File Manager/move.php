<?php
include '../auth.php';
/*
Original author: Toby Chui
Branch: Master
Commit ID: c6d6a955446ee4c7e8311229d704a8cebee1d906
Lasted chanegd on: 5/12/2019
URi: ArOZ-Online-Beta/src/master/SystemAOB/functions/file_system/move.php
*/
?>
<?php
//Require variable: from (Full path), to (Full path)
function mv($var){
	if (isset($_GET[$var]) !== false && $_GET[$var] != ""){
		return $_GET[$var];
	}else{
		return null;
	}
}

if($_GET["DontCreateNewFolder"] == "true"){
	//echo mv("from");
	$dir = scandir(mv("from"));
	array_shift($dir);
	array_shift($dir);
	//print_r($dir);
	
	foreach ($dir as $filename) {
		if(substr(mv("from"), -1) == DIRECTORY_SEPARATOR){
			$from = mv("from").$filename;
		}else{
			$from = mv("from").DIRECTORY_SEPARATOR.$filename;
		}
		
		if(substr(mv("to"), -1) == DIRECTORY_SEPARATOR){
			$to = mv("to").$filename;
		}else{
			$to = mv("to").DIRECTORY_SEPARATOR.$filename;
		}
		
		if ($from != null && $to != null){
			if (file_exists($to)){
				die("ERROR. Target already eixsts.");
			}
			if (file_exists($from)){
				rename($from, $to);
				echo "DONE";
			}else{
			echo 'ERROR';
		}
			
		}
	}
}else{

	$from = mv("from");
	$to = mv("to");
	if ($from != null && $to != null){
		if (file_exists($to)){
			die("ERROR. Target directory already eixsts.");
		}
		if (file_exists($from)){
			rename($from, $to);
			echo "DONE";
			return true;
			exit();
		}else{
		echo 'ERROR';
		return true;
		exit();
	}
		
	}
	
}



?>
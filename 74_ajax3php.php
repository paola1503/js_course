<?php


$the_user=isset($_GET['username']) ? $_GET['username'] : $_POST['username'];

$the_array = new stdClass();

if ($the_user=="Paola") {
  
	$the_array->Name = "Paola";
	$the_array->Surname = "Petri";
	$the_array->Age = "25";
	$json = json_encode($the_array);
	echo $json;


}



?>

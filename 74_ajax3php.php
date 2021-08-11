<?php


$the_user=isset($_GET['username']) ? $_GET['username'] : $_POST['username'];

$the_array = new stdClass();

if ($the_user=="Superstar"){
  
	$the_array->Name = "Paola";
	$the_array->Surname = "Petri";
	$the_array->Age = "25";
	$json = json_encode($the_array);
	echo $json;
}

else if($the_user=="Queen"){
	$the_array->Name = "Mary";
	$the_array->Surname = "Ferguson";
	$the_array->Age = "27";
	$json = json_encode($the_array);
	echo $json;
}

else if($the_user=="Thebest"){
	$the_array->Name = "Anthony";
	$the_array->Surname = "Lawson";
	$the_array->Age = "35";
	$json = json_encode($the_array);
	echo $json;
}


?>

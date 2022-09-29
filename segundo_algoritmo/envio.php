<?php

$array=[$_POST['primer'],$_POST['segundo'],$_POST['tercer'],$_POST['cuarto'],$_POST['quinto']];

asort($array);
print_r($array);
echo"</br>";
print_r(implode(",", $array));


?>
<?php
$con=mysqli_connect('localhost', 'root', '','mystore', 3310); //trbe sa pui portul la sfarsit!!!!
if($con){
    echo "Connected to the SQL database";
}else{
    die(mysqli_error($con));
}


?>
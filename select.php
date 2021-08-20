<?php

// Create connection
$conn = mysqli_connect("localhost","root","","test");


    
$val=rand(10,100); //select random value

$ins="INSERT INTO traffic(current_traffic) VALUES($val);"; //insert it into the database
$exe=mysqli_query($conn,$ins); //execute the query



$ult=rand(10000,300000);
$ion=rand(10000,250000);
$xp=rand(10000,200000);
$kn=rand(10000,300000);
$id=1;
$upd="UPDATE active SET Ultimatix='".$ult."',TCSION='".$ion."',TCSXplore='".$xp."',Knome='".$kn."' WHERE id='".$id."';";
$exe1=mysqli_query($conn,$upd);
?>

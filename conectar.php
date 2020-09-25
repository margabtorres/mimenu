<?php
//archio que sera ignorado por git, ahora que tal
$server="localhost";
$uid="root";
$upass="";
$bd="test";
$link=mysqli_connect($server,$uid,$upass,$bd);


if($link){
    echo "Conectado";
}else{
    echo "No coonectado";
}
?>

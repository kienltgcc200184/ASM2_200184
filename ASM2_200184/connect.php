<?php

// $server = "localhost";
// $username ="root";
// $password = "";
// $db = "shop_200184";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }
$conn = pg_connect("postgres://nugkvsyrzekppd:984299e482ad7ad28e81b9ec8e369deee8db6cb0d5eedd89137ff9614f012bc1@ec2-54-211-255-161.compute-1.amazonaws.com:5432/d38ub39isp8f0r");

if(!$Conn){
    die("conn failed");
}

?>
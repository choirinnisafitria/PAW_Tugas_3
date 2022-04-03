<?php
$host = "localhost";
$user ="root";
$password ="";
$dbname ="erin";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}
?>
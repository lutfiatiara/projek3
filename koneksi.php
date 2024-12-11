<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'projek3';

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi){
    die("eror pada database". mysqli_connect_error());
}

?>

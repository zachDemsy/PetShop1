<?php
$host = "localhost";
$user = 'root';
$password = "";
$database = 'task';
$port = 3306;
$con = mysqli_connect($host, $user, $password, $database, $port) or die("Connection Failed");
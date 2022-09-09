<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=rumahsakit", 'root', '');
$query = $db->query("UPDATE pengguna SET nama='$nama', password='$password', role='$role' WHERE id='$id'");

if($query){
    header("location:admin.php");
}
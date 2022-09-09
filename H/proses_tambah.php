<?php
$nama = $_POST['nama'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
$query = $db->query("INSERT INTO `pengguna`(`id`, `nama`, `password`, `role`) VALUES ('','$nama','$password','$role')");

if($query){
    header("location:admin.php");
}
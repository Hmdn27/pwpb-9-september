<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];
var_dump($_POST);

$koneksi = new PDO('mysql:host=localhost;dbname=puskesmas', 'root', '');
$query = $koneksi->query("select * from pengguna where nama='$nama' AND password='$password'");
$data = $query->fetch();

if($query->rowCount() > 0){
    if($data['role']=="admin"){
        // echo"dataada";
        // die();
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = "mage";
        header("Location:beranda.php");
    }
    else if($data['role']=="mage"){
        echo "hai user";
        $_SESSION['nama'] = $nama;
        $_SESSION['role'] = "mage";
        header("Location:user.php");
    }
}else{
    header("Location:form.php");
}
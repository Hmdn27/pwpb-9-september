<?php
session_start();
echo "<h1>Selamat Datang Yang Mulia,  </ h1>";echo $_SESSION["nama"];
if(!isset($_SESSION["nama"])){
    header("Location:form.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>WEB PUSKESMAS</title>
</head>
<body>
    <h1>God Save The King!</h1>
    <form action="admin.php">
        <button class="btn btn-outline-primary">Cek Data Pengguna</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Membuat Form (Hari 2)</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama"><br>
        <lebel for="email">Email:</lebel>
        <input type="text" name="email"><br>
        <lebel for="umur">Umur:</lebel>
        <input type="text" name="umur"><br>
        <lebel for="nama_universitas">Universitas:</lebel>
        <input type="text" name="nama_universitas"><br>
        <input type="submit">
    </form>
<?php
    $nama = @$_POST['nama'];
    $email = @$_POST['email'];
    $umur = @$_POST['umur'];
    $nama_universitas = @$_POST['nama_universitas'];

        echo "<p>Nama:</p> {$nama} <br>";

        echo "<p>Email:</p> {$email} <br>";
 
        echo "<p>Umur:</p> {$umur} <br>";
    
        echo "<p>Nama Universitas:</p> {$nama_universitas} <br>";
?>
</body>
</html>

<?php 
include("koneksi.php"); 
 
// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="header">
        <header>    
    <CEnter><h1>Modularisasi Menggunakan Require</h1></CEnter>
        </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="about.php">Tentang</a>
        <a href="kontak.php">Kontak</a>
    </nav>  
    </div>
</div>
</body>
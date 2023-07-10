<?php
include('config.php'); 
if(isset($_POST['nama'])) {    
    $nama = $_POST['nama'];
    $ndp = $_POST['ndp'];
    $sql = "INSERT INTO page1  (nama, umur, ndp)
    VALUES ('$nama', '$umur', '$ndp')";
    $samb = mysqli_connect($host, $user, $password, $database);
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Anda Berjaya')</script>";
    else 
        echo "<script>alert('Anda Tidak Berjaya')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>page1</title>
</head>
<body>

<form action="menu2.php" method="post">

  <div class="container">
    <label for="name"><b>Nama Penuh :</b></label>
    <input type="text" placeholder="name" name="name" required>

    <label for="numbur"><b>NDP</b></label>
    <input type="numbur" placeholder="Enter numbur" name="number" required>

    <button><a href="">Reset</a></button>      
    <button type="submit">Login</button>
    
  
    </label>
  </div>


</body>
</html>
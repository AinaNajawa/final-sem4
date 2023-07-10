<?php
include('config.php'); 
if(isset($_POST['nama'])) {    
    $nama = $_POST['nama'];
    $ndp = $_POST['ndp'];
    $sql = "INSERT INTO page1 (nama,ndp)
    VALUES ('$nama', '$ndp')";
    $samb = mysqli_connect_errno($host, $user, $password, $database);
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya ditambah')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='menu2.php'</script>";
}
?>

    <link rel="stylesheet" href="style.css">
  
    <body>

    <form method="post">
    <tr>
                <td>Nama:</td><br>
                <td><input type="" name="nama" id="nama"></td>
                
                </tr><br>

                <tr>
                <td> ndp:</td><br>
                <td><input type="number" name="ndp" id="ndp" ></td> 
               
            </tr> <br>

                        
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" >Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button><br><br>
                          
                    </form>
                    <form action="index.php"><button type="submit" class="btn btn-warning">Home</button></form><br><br>
                    </div>
                </form>
</body>
</html>
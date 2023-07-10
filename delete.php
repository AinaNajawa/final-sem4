<?php 


// sambung ke pangkalan data
include('config.php');
//memastikan pengguna login terlebih dahulu
// include('pengesahan_guru.php' );
//Dapatkan ID dari URL
// $id = $_GET['nama'];
//Hapus rekod penasihat semasa
$result = mysqli_query($samb, "DELETE FROM menu2 ");
//Papar mesej jika berjaya hapus
echo "<script>alert(' Anda Berjaya Delete');
window.location= 'index.php'</script>";

?>
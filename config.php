<?php
$host="localhost";
$user="root";
$password="";
$database="final-sem4";
// $samb=mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()){
    echo "proses sambung ke pangkalan data anda berjaya";
    exit();
}
if (mysqli_connect_errno()){
echo "proses sambung ke pangkalan data anda gagal";
exit();
}

?>

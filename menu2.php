<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page3</title>
</head>
<body>
        <link rel="stylesheet" href="menu2.css">  


<table>
  <tr class="name">
    <th>nama</th>
    <th>ndp</th>
    <td></td>
    <td></td>
    <th  ="250"><b>
</th>

<?php
            $samb= mysqli_connect_errno($host, $user, $password, $database);
            $sql = "SELECT * FROM page1 ORDER BY ndp";
            $result =mysqli_connect_errno($samb, $sql);  
            $id = 1;          
            while ($page1 = mysqli_connect_errno($result)); {
            ?> 
 
<tr>
  <tr>
        <td><?php echo $page1['nama']; ?></td>
        <td><?php echo $page1['ndp']; ?></td>

         <td><a href="menu2.php"><input type="submit" nama="delete" value="Delete" ></td>
         <td><a href="register.php"><input type="submit" name="update" value="update"></td>
         <button><a href="index.php">Login</button>
</tr>

<!-- <td><input href="register.php" type="submit" nama="update" value="Update"></td> -->
  <center>
             <?php $id = $id + 1; } ?></td>
           </center>

</table>
</body>
</html>
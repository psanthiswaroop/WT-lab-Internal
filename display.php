<?php
    include('server.php');
    $qry = "SELECT * FROM product;";
    $sql = mysqli_query($db,$qry);
    if(mysqli_num_rows($sql) > 0){
       while($row = mysqli_fetch_assoc($sql)){
           $img = "uploads/".$row['photo'];
           echo "<img src='$img'>"; 
       } 
    }
?>
<!DOCTYPE>
<html>
<head> 
    <style>
        img{
              border:2px solid black;
        }
        </style>
</head>
 <body>
</body>
</html>

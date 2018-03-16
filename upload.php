<?php
include('server.php');
session_start();
$adminid = $_SESSION['adminid'];
    if(isset($_POST['upload'])){
        $filename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"uploads/".$filename);
        $sql = "INSERT INTO product (adminid,photo) VALUES ('$adminid','$filename')";
        mysqli_query($db,$sql);
        header('location:display.php');
    }
?>

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>Products</h3>
    </div>
    <form method="post" action="" enctype="multipart/form-data">
        <div>
            <input type="file" name="image">
        </div><br>
        <div>
            <input type="submit" name="upload">
        </div>
    </form>
</body>
</html>
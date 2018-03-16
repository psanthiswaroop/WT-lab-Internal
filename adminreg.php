<?php
    include('server.php');
    if(isset($_POST['register'])){
        $name = $_POST['adminname'];
        $password = $_POST['password'];
        $qry = "INSERT INTO `admin`(name, password)VALUES('$name','$password');";
        mysqli_query($db,$qry);
        header('location:login.php');
    }
?>
<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>ADMIN</h3>
    </div>
    <form method="POST" action="">
        <div class="input_group">
            <label>AdminName</label>
            <input type="text" name="adminname" placeholder="Admin name">
        </div>
        <div class="input_group">
            <label>Password</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="input_group">
            <input type="submit" name="register">
        </div>
    </form>
</body>
</html>
<?php
session_start();
    include('server.php');
    if(isset($_POST['login'])){
        $name = $_POST['adminname'];
        $password = $_POST['pssword'];
        $qry = "SELECT * FROM admin WHERE `name`='$name' AND `password`='$password';";
        $sql = mysqli_query($db,$qry);
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['adminid'] = $row['adminid'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['image'] = $row['image'];
        }
         header('location:upload.php');
    }
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>ADMIN Login</h3>
    </div>
    <form method="post" action="">
        <div>
            <label>AdminName</label>
            <input type="text" name="adminname" placeholder="Admin name">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="pssword" placeholder="password">
        </div>
    
        <div>
            <button type="submit" name="login">Login
            </button>
        </div>
    </form>
</body>
</html>
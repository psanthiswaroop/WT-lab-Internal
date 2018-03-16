<?php
session_start();
    include('server.php');
    if(isset($_POST['login'])){
        $name = $_POST['username'];
        $password = $_POST['pssword'];
        $qry = "SELECT * FROM user WHERE `username`='$name' AND `password`='$password';";
        $sql = mysqli_query($db,$qry);
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
        }
         header('location:review.php');
    }
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>User Login</h3>
    </div>
    <form method="post" action="">
        <div>
            <label>UserName</label>
            <input type="text" name="username" placeholder="User name">
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
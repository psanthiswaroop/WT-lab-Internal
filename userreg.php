<?php
    include('server.php');
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email']
        $pssword = $_POST['password'];
        $qry = "INSERT INTO user (username, email, pssword) VALUES ('$username','$email','$pssword');";
        mysqli_query($db,$qry);
        header('location:userlogin.php');
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
    <form method="post" action="">
        <div class="input_group">
            <label>UserName</label>
            <input type="text" name="username" placeholder="User name">
        </div>
        <div class="input_group">
            <label>Email</label>
            <input type="text" name="email" placeholder="User email">
        </div>
        <div class="input_group">
            <label>Password</label>
            <input type="password" name="password" placeholder="password">
        </div>
        <div>
        <div class="input_group">
            <input type="submit" name="register">
        </div>
    </form>
</body>
</html>
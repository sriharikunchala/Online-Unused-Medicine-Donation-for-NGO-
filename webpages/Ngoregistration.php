<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>NGO Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db3.php');
    
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
        
        $username = mysqli_real_escape_string($con, $username);

        $ngoname = stripcslashes($_REQUEST['ngoname']);

        $ngoname = mysqli_real_escape_string($con, $ngoname);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username,ngoname, password, email, create_datetime)
                     VALUES ('$username','$ngoname', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='Ngologin.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">NGO Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="ngoname" placeholder="NGO name" required/>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="Ngologin.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>
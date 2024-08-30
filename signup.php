<?php 
include "./connect_to_mysql.php";
if(isset($_POST["register"])) {
    extract($_POST);

        $querry = "INSERT INTO `user` (`uid`, `name`, `email`, `password`, `phone`) VALUES (NULL, '$username', '$email', '$password', '$phone')";
        if(mysqli_query($con, $querry)) header("Location: login.php");
        else echo "<script>alert('Registration Failed');</script>";
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/style.css">

<head>
    <title>Sign Up</title>
</head>

<body>
    <div class="Singupmain">
        <div class="SingUpimage">
            <img src="assets/svg/undraw_authentication_re_svpt.svg" alt="" srcset="">
        </div>
        <div class="Singupcontaint">
            <form action="signup.php" method="post">
                <input type="text" name="username" placeholder="New Username" required>
                <input type="password" name="password" placeholder="New Password" required>
                <input type="email" name="email" placeholder="New Email" required>
                <input type="tel" name="phone" placeholder="New Phone Number" required>
                <button type="submit" name="register">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
    <script>
        document.body.style.overflowY = 'hidden';
        document.body.style.overflowX = 'hidden';
    </script>
</body>

</html>
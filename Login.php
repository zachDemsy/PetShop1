<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/style.css">

<head>
    <title>Login</title>
</head>

<body>
    <div class="loginmain">
        <div class="loginimage">
            <img src="assets/svg/undraw_login_re_4vu2.svg" alt="" srcset="">
        </div>
        <div class="logincontaint">
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="example@mail.com" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="checkbox" name="chk" >Remember Me
                <button type="submit" name="login">Login</button>
            </form>

            <?php
include "./connect_to_mysql.php";
session_start();
if (isset($_POST["login"])) {
    extract($_POST);
    $querry = "select * from user where email='$email' and password='$password'";
    $res = mysqli_query($con, $querry);
    if (mysqli_num_rows($res)) {
        $array = mysqli_fetch_assoc($res);
        echo "<script>alert('Login Successfull');</script>";
        header("Location: home.php");
        //echo "Login Successfull";
        if(isset($chk)) {
            setcookie("name", $array["name"], time() + 3600 * 24);
            setcookie("email", $array["email"], time() + 3600 * 24);
        }
        $_SESSION["name"] = $array["name"];
        $_SESSION["email"] = $array["email"];


    } else echo "Login Failed";
}
?>

            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
    <script>
        document.body.style.overflowY = 'hidden';
        document.body.style.overflowX = 'hidden';
    </script>
</body>

</html>
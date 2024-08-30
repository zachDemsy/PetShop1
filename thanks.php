<?php 
session_start();
if(!isset($_COOKIE["email"]) || !isset($_SESSION["email"])) {
    header("Location: login.php");
}

$name = $_SESSION["name"];
$email = $_COOKIE["email"];

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="assets/style.css">

<head>
    <title>LogOut</title>
</head>

<body>
<header>
        <nav class="menu">
            <div class="navbar">
            <div class="navbar">
            <button id="loginBtn" name="Login"><a href="Login.php">LOGIN</a></button>
                <button id="signupBtn" name="Signup"><a href="signup.php">SIGNUP</a></button>
                <a href="home.php">Home</a>
                <a href="thanks.php">Logout</a>
            </div>
        </nav>
</header>
    <div class="main">
        <div class="image">
            <img src="assets/svg/undraw_super_thank_you_re_f8bo.svg" alt="" srcset="">
        </div>
        <div class="containt">
           <div class="context"> <h2>Thankyou for Visting <?php echo $name;?></h2>
            <p> We appreciate your visit and trust in our services. Whether you're booking a stay, an experience, or any other service, we're here to make your reservation process seamless and enjoyable. Feel free to explore our offerings, and we look forward to serving you. Safe travels and happy booking!</p>
            <a href="logout.php">Logout</a></div>
        </div>
    </div>
    <script>
        document.body.style.overflowY = 'hidden';
        document.body.style.overflowX = 'hidden';
    </script>
</body>

</html>
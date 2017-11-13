<?php
/**
 * Created by PhpStorm.
 * User: chin39
 * Date: 2017/11/8
 * Time: 14:38
 */
require_once $_SERVER["DOCUMENT_ROOT"] . "/accounts/login.php";
date_default_timezone_set("EST");


// Input: Username and Password
// Output: Bool for whether successful and store the successful result to session

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $username = $_POST['username'];
        // check database record
        if (login($username, $password)) {
            header("location:landing_page.php");
        } else {
            echo "login fail";
        }
    }

} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}

?>

<html>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>CMK Marketing Reminder System Login Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">



</head>

<body>

<!-- Mixins-->
<!-- Pen Title-->
<!-- <div class="pen-title"> -->
    <!-- <h1>CMK Marketing Reminder System Login Form</h1> -->
    <!-- <span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span> -->
<!-- </div> -->
<!-- <div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login</h1>
        <form method="post" action="index.php">
            <div class="input-container">
                <input type="text" id="username" name="username" required="required"/>
                <label for="username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="text" id="password" name="password" required="required"/>
                <label for="password">Password</label>
                <div class="bar"></div>
            </div>
            <div class="button-container">
                <button><span>Go</span></button>
            </div>
            <div class="footer"><a href="#">Forgot your password?</a></div>
        </form>
    </div>
</div> -->

<h1>CMK Marketing Reminder System Login</h1>
<!-- Adapted from: https://codepen.io/anon/pen/POmxRB -->
    <div id="login">
      <form method="post" action="index.php" name='form-login'>
        <span class="fontawesome-user"></span>
          <input type="text" id="username" placeholder="Username" name="username" required="required">

        <span class="fontawesome-lock"></span>
          <input type="password" id="password" name="password" placeholder="Password" required="required">

        <input type="submit" value="Login">

      </div>

</form>

<!-- Portfolio-->
<!-- <a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a> -->
<!-- CodePen-->
<!-- <a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a> -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>
<!-- <body> -->
<!-- <form method="post" action="login.php"> -->
<!-- <label for="username">username</label>
<input type="text" name="username" id="username" value=""/>
<label for="password">password</label>
<input type="text" name="password" id="password" value=""/> -->

<!-- Only one of these will be set with their respective value at a time -->
<!-- <input type="submit" name="login" value="Login"/> -->
<!-- </form> -->
</body>
</html>

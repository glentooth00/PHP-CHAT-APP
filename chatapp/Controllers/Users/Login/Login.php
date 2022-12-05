<?php 

$pageTitle ='Login';
include_once("../../assets/includes/header.php");

?>

<div class="main-container">

    <div class="login-form">

    <h1 id="app">SIMPLE CHAT APP</h1>

        <form action="#" method="post">
            <label>Username</label>
            <input type="text" name="username" value="" placeholder="enter username">
            <label>Password</label>
            <input type="password" name="password" value="" placeholder="enter password"><br>
            <center><button name="submit" id="loginBtn">Login</button></center>
        </form>

        <h4>Dont have an Account?<a href="../register/register.php">Register here!!</a></h4>

    </div>  

</div>



<?php
include_once("../../assets/includes/footer.php");
?>
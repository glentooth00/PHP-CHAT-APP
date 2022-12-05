<?php 
session_start();

$pageTitle = 'Register';
include_once("../../assets/includes/header.php");
?>
<div class="reg-container">

    <div class="notif">
        <?php 
            include_once('../Notification/sessions.php');
        ?>
    </div>


    <div class="reg-form">

    

        <h1 id="Reg">Register</h1>
        <form action="Store.php" method="post">
            <lable>Username</lable>
            <input type="text" name="username" value="">
            <lable>Password</lable>
            <input type="text" name="password" value="">
            <lable>Firstname</lable>
            <input type="text" name="firstname" value="">
            <lable>Lastname</lable>
            <input type="text" name="lastname" value="">
            <lable>Gender</lable><br>
            <select name="gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <button id="regBtn">Submit</button>
        </form>
        <h4>Already have an account??<br><a href="../Login/Login.php">Login here!!</a></h4>
    </div>
</div>
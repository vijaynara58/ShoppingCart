<?php
require 'functions.php';

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?=template_header('welcome')?>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <div class="page-header">
                    <h1>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to our site.</h1>
                </div>
                <p>
                    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                    <a href="index.php" class="btn btn-danger">Home</a>
                </p>
            </div>
        </div>
    </div>

<?=template_footer()?>

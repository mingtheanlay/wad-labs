<?php
session_start();

require_once "authCookieSessionValidate.php";

if (!$isLoggedIn) {
    header("Location: ./index.php");
}
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<?php
include('includes/home.php');
?>

<!-- Content Row -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
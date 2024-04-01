<?php 
session_start();

if (isset($_SESSION["userFname"])){
    session_destroy();
    header("Location:signinPage.php");
}
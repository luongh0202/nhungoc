<?php session_start();
if (isset($_SESSION['SLL']))
{
    unset($_SESSION['SLL']);
header('location: login.php');
}

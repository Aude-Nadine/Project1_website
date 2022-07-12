<?php

session_start();
if (isset($_SESSION['firstname'])) {
    header("location:personalized.php");
} else {
    if (!isset($_SESSION['firstname'])) {
        header("location:login.php");
    }
}

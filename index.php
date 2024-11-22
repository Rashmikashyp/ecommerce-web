<?php
session_start(); 

if (isset($_SESSION['user_name'])) {
    echo "Welcome, " . $_SESSION['user_name'];
} else {
    echo "User not logged in.";
}
?>

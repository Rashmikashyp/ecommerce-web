<?php

include 'db.php'; // Include database connection

session_start();


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .form-control:focus {
            border-color: #6c757d;
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.25);
        }
        .signup-btn {
            width: 100%;
            background-color: #343a40;
            color: white;
        }
        .signup-btn:hover {
            background-color: #495057;
        }
        .text-muted {
            text-align: center;
            margin-top: 15px;
        }
        .text-muted a {
            color: #343a40;
            text-decoration: none;
        }
        .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <!-- Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control"  id="image" name="profile">
        </div>

            <button type="submit" name="sub" class="btn signup-btn">Sign Up</button>
            <p class="text-muted mt-3">Already have an account? <a href="/login">Login</a></p>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <?php
    if(isset($_POST['sub'])){
        $name =$_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    // $profile = $_POST['image'];
    if(isset($_FILES['profile'])){
        $profile_name =$_FILES['profile']['name'];
        $profile_tmp_name =$_FILES['profile']['tmp_name'];
        move_uploaded_file($profile_tmp_name,'upload/'.$profile_name);
    }
    // $location ="image_data/" . $profile_name;
    $query=mysqli_query($conn ,"INSERT INTO `admin`(`name`, `email`, `password`,`img`) VALUES ('$name','$email','$password','$profile_name')");
    if($query){
        // header("Location:index.php");
        echo $query;
        // move_uploaded_file($image_tmp_name ,$location);
    }
    else{
        echo "Not inserted/..";
    }
    }
    ?>
</body>
</html>
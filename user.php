<?php
session_start();
include('db.php'); // Include your database connection file
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        .register-link {
            text-align: center;
            display: block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="log">Login</button>
            </div>
            <a class="register-link" href="register.php">Don't have an account? Register</a>
        </form>
    </div>
</body>
</html>

<?php
$conn_ad = mysqli_connect("localhost" ,"root" ,"" ,"ecommerce");

if(isset($_POST['log'])){
    $name =$_POST['email'];
    $pass = $_POST['password'];
    $qry = mysqli_query($conn,"select * from users where(email = '$name' || name = '$name' ) and password='$pass'");
    $query =mysqli_query($conn_ad , "SELECT * FROM admin WHERE  (email = '$name' || name = '$name' ) AND password = '$pass'");
    if(mysqli_num_rows($qry) > 0 ){
        header("Location: index.php");
    }else if(mysqli_num_rows($query) > 0 ){
        header("Location: admin.php");
    }else{
        echo"not found";
    }
}
?>
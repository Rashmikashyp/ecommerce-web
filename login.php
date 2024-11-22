
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" required name="user">
        <input type="text" required name="pass">
        <input type="submit" value=" submit" name="sub">
    </form>
    <?php
session_start();
$conn = mysqli_connect("localhost" ,"root" ,"" ,"ecommerce");





//  session_start(); // Start the session

if (isset($_POST['sub'])) {
    $name = $_POST['user'];
    $password = $_POST['pass'];
    $query =mysqli_query($conn , "SELECT * FROM `admin` WHERE  name = '$name' AND password = '$password'");
    // Set the session variable
    if( mysqli_num_rows($query) > 0){
        $_SESSION['user_name'] = $_POST['user'];
        header("Location: index.php");
    }else{
        echo "not found";
    }
    exit(); // Ensure no further code is executed after the redirection
}
?>
</body>
</html>
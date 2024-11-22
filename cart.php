<?php
include 'db.php'; // Include database connection
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch cart items for the user
$query = "SELECT * FROM cart WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$cart_items = $result->fetch_all(MYSQLI_ASSOC);

// Calculate total price
$total = 0;
foreach ($cart_items as $item) {
    $total += $item['total_price'];
}

// Handle quantity update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $cart_id = $_POST['cart_id'];
        $quantity = $_POST['quantity'];
        
        $update_query = "UPDATE cart SET quantity = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ii", $quantity, $cart_id);
        $update_stmt->execute();
        
        header("Location: cart.php");
        exit();
    }

    // Handle item removal
    if (isset($_POST['remove'])) {
        $cart_id = $_POST['cart_id'];

        $delete_query = "DELETE FROM cart WHERE id = ?";
        $delete_stmt = $conn->prepare($delete_query);
        $delete_stmt->bind_param("i", $cart_id);
        $delete_stmt->execute();

        header("Location: cart.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

table th {
    background-color: #f4f4f9;
}

.cart-total {
    text-align: right;
    margin-top: 20px;
}

.btn {
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.btn:hover {
    background-color: #218838;
}


</style>












<body>
    <div class="container">
        <h1>Your Shopping Cart</h1>
        <?php if (count($cart_items) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['product_name']); ?></td>
                            <td><?= number_format($item['product_price'], 2); ?></td>
                            <td>
                                <form method="POST" action="cart.php">
                                    <input type="number" name="quantity" value="<?= $item['quantity']; ?>" min="1">
                                    <input type="hidden" name="cart_id" value="<?= $item['id']; ?>">
                                    <button type="submit" name="update">Update</button>
                                </form>
                            </td>
                            <td><?= number_format($item['total_price'], 2); ?></td>
                            <td>
                                <form method="POST" action="cart.php">
                                    <input type="hidden" name="cart_id" value="<?= $item['id']; ?>">
                                    <button type="submit" name="remove">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="cart-total">
                <h3>Total: ₹<?= number_format($total, 2); ?></h3>
                <a href="checkout.php" class="btn">Proceed to Checkout</a>
            </div>
        <?php else: ?>
            <p>Your cart is empty. <a href="products.php">Shop now!</a></p>
        <?php endif; ?>
    </div>
</body>
</html>

<?php


// Sample cart data (replace with data fetched from your database or session)
$cartItems = [
    ['id' => 1, 'name' => 'Product Name', 'price' => 25.00, 'quantity' => 1, 'image' => 'https://via.placeholder.com/70'],
    ['id' => 2, 'name' => 'Another Product', 'price' => 30.00, 'quantity' => 2, 'image' => 'https://via.placeholder.com/70']
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart-page {
            margin-top: 50px;
        }
        .cart-table img {
            width: 70px;
            height: auto;
        }
        .cart-summary {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container cart-page">
    <h1 class="text-center mb-4">Shopping Cart</h1>
    
    <!-- Cart Items -->
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-bordered cart-table">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $subtotal = 0;
                    foreach ($cartItems as $index => $item): 
                        $total = $item['price'] * $item['quantity'];
                        $subtotal += $total;
                    ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?= $item['image'] ?>" alt="Product Image" class="me-3">
                                <span><?= htmlspecialchars($item['name']) ?></span>
                            </div>
                        </td>
                        <td>$<?= number_format($item['price'], 2) ?></td>
                        <td>
                            <input type="number" value="<?= $item['quantity'] ?>" class="form-control" style="width: 80px;">
                        </td>
                        <td>$<?= number_format($total, 2) ?></td>
                        <td>
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4">
            <div class="cart-summary">
                <h4>Cart Summary</h4>
                <hr>
                <p>Subtotal: <span class="float-end">$<?= number_format($subtotal, 2) ?></span></p>
                <p>Tax (5%): <span class="float-end">$<?= number_format($subtotal * 0.05, 2) ?></span></p>
                <p><strong>Total: <span class="float-end">$<?= number_format($subtotal * 1.05, 2) ?></span></strong></p>
                <button class="btn btn-primary w-100 mt-3">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

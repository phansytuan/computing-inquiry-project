<?php
    if (!isset($_SERVER['HTTP_REFERER'])) {
        header("location: payment.php");
        exit;
    }
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 4: Hau Linh Chi, Nguyen Vu Duy Minh, Tran Huy Vu, Bui Thai Anh, Phan Sy Tuan">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&family=Playfair+Display:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="styles/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <title>Receipt Page</title>
</head>

<body>
<!-- Navigation bar -->
<?php
include("includes/header.inc");
include("includes/menu.inc");
?>
    <!-- Logo and Thank you Text -->
    <div id="minh-receipt-logo">
        <a href="index.php">
            <img src= "images/TCAMV_free-file (1).png" alt="Logo">
        </a>
    </div>
    <h1 class="minh-receipt-heading">Thank you for your order!</h1>
    <!-- Order Details -->
    <div class="minh-receipt-container">
        <div id="minh-receipt-first-h2"><h2>Your order</h2></div>
        <div class="minh-receipt-p">
            <p><span class="minh-receipt-bold">Order ID:</span> <?= $_SESSION['order_id'] ?></p>
            <p><span class="minh-receipt-bold">Order status:</span> <?= $_SESSION['order_status'] ?></p>
            <p><span class="minh-receipt-bold">Order time:</span> <?= $_SESSION['order_time'] ?></p>
            <hr>
        </div>
        <div class="minh-receipt-p">
            <p><span class="minh-receipt-bold">Course name:</span> <?= $_SESSION['values']['product'] ?></p>
            <p><span class="minh-receipt-bold">Quantity:</span> <?= $_SESSION['values']['quan'] ?></p>
            <hr>
        </div>
        <div class="minh-receipt-p">
            <p><span class="minh-receipt-bold">Comments:</span> <?= $_SESSION['values']['comment'] ?></p>
            <hr>
        </div>
        <div id="minh-receipt-total">
            <p class="minh-receipt-bold">Total: </p>
            <p class="minh-receipt-right">$<?= $_SESSION['values']['total_cost'] ?></p>
            <hr>
        </div>
        <!-- Delivery Details -->
        <div class="minh-receipt-details minh-receipt-deli">
            <h2>Delivery Details</h2>
            <p><span class="minh-receipt-bold">First name:</span> <?= $_SESSION['values']['fname'] ?></p>
            <p><span class="minh-receipt-bold">Last name:</span> <?= $_SESSION['values']['lname'] ?></p>
            <p><span class="minh-receipt-bold">Email:</span> <?= $_SESSION['values']['email'] ?></p>
            <p><span class="minh-receipt-bold">Phone number:</span> <?= $_SESSION['values']['phone'] ?></p>
            <p><span class="minh-receipt-bold">Delivery Address:</span> <?= $_SESSION['values']['address'] ?></p>
            <p><span class="minh-receipt-bold">Postcode:</span> <?= $_SESSION['values']['postcode'] ?></p>
        </div>
        <!-- Payment Details -->
        <div class="minh-receipt-details minh-receipt-payment">
            <h2>Payment Details</h2>
            <p><span class="minh-receipt-bold">Name on card:</span> ************</p>
            <p><span class="minh-receipt-bold">Credit card type:</span> ********</p>
            <p><span class="minh-receipt-bold">Credit card number:</span> ****************</p>
            <p><span class="minh-receipt-bold">Credit card expiry date:</span> ******</p>
            <p><span class="minh-receipt-bold">Card verification value:</span> ****</p>
        </div>
    </div>
    <!-- Back to Payment Button -->
    <div class="minh-back-to-payment">
        <a href="payment.php" class="minh-navigate-button">Back to Payment Form</a>
    </div>
<!-- Footer -->
<?php include("includes/footer.inc"); ?>
</body>
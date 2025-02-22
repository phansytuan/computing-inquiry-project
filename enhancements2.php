<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group 4: Hau Linh Chi, Nguyen Vu Duy Minh, Tran Huy Vu, Bui Thai Anh, Phan Sy Tuan">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&family=Playfair+Display:wght@400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>TCAMV</title>
</head>

<body>
    <?php
    include("includes/header.inc");
    include("includes/menu.inc");
    ?>
    <!-- Enhancement Links -->

    <div id="enhancementbox">
        <h3>Enhancement 1:</h3>
        <br>
        <p><a href="login.php"><b>Login page</b></a> before accessing manager's page<span></span></p>
        <br>
        <p>Our group made two enhancements to our project. Firstly, we developed a secure login system for the manager
            page to prevent unauthorized access and data theft. We created a secure database to store login credentials,
            and added an extra layer of protection to prevent access via URL. Additionally, we encrypted the password
            using MD5 for added security. Upon successful login, users are taken to the manager page, where a "Welcome
            back!" message is displayed, and they can logout anytime. These enhancements improve the page's security and
            privacy.</p>
        <br>
        <p><a href="https://www.youtube.com/watch?v=vESwDXV81F0">Reference</a></p>
        <br>
        <br>
        <h3>Enhancement 2</h3>
        <br>
        <p>Sort total cost in ascending and desccending order in <span><a href="manager.php"><b>manager's
                        page</b></a></span></p>
        <p>for managing orders, there is a feature to sort the total cost of orders in ascending or
            descending order. Additionally, the manager can search for orders by name, product, or pending status to
            easily find specific orders they need to manage.</p>
    </div>
    <?php include("includes/footer.inc"); ?>
</body>

</html>
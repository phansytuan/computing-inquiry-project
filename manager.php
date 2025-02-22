<!-- Please use username: manager and password: 0bdefc7766c7c2d94b088970941a6c2c to login the manager page -->
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
    <!-- SEARCH PHP -->

    <!-- LOGIN SUCCESSFULLY -->
    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        echo "<br><h3 style='text-align:center;'>Welcome back Manager !</h3>";
        echo "<p style='text-align:center;'>Click here to <a href='logout.php'>Logout</a></p>";
    } else {
        header("location:login.php");
    }
    ?>

    <?php
    require_once("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db) or die('Unable to connect');
    $sql = "SELECT * FROM orders";
    if (isset($_POST["sname"])) {
        $sname = $_POST["sname"];
        $sql .= " WHERE first_name LIKE '%$sname%' OR last_name LIKE '%$sname%'";
    }
    if (isset($_POST["sproduct"])) {
        $sproduct = $_POST["sproduct"];
        $sql .= " WHERE product LIKE '%$sproduct%' ";
    }

    if (isset($_POST["pending"])) {
        $pending = $_POST["pending"];
        $sql .= " WHERE order_status='$pending'";
    }
    if (isset($_POST["sortascending"])) {
        $sortascending = $_POST["sortascending"];
        $sql .= " ORDER BY order_cost";
    }

    if (isset($_POST["sortdescending"])) {
        $sortdescending = $_POST["sortdescending"];
        $sql .= " ORDER BY order_cost DESC";
    }

    $result = mysqli_query($conn, $sql);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($conn);
    ?>


    <!-- DISPLAY ALL ORDERS -->


    <table class="resulttable">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Name</th>
                <th scope="col">Order date</th>
                <th scope="col">Product</th>
                <th scope="col">
                    Order Status
                    <br><br>
                    <!-- Search for pending orders -->
                    <form class="" method="post" action="">
                        <p class="row">
                            <input type="text" name="pending" id="pending" value="pending" hidden>
                            <input class="sbutton" type="submit" value="Pending Orders">
                        </p>
                    </form>
                </th>
                <th scope="col">
                    Total cost
                    <br><br>
                    <form method="post" action="">
                        <input type="text" name="sortascending" id="sortascending" value="sortascending" hidden>
                        <input class="sbutton" type="submit" value="Sort Asc">
                    </form>
                    <br>
                    <form method="post" action="">
                        <input type="text" name="sortdescending" id="sortdescending" value="sortdescending" hidden>
                        <input class="sbutton" type="submit" value="Sort Desc">
                    </form>
                </th>
                <th scope="col">Cancel order</th>
                <th scope="col">Update status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td>
                        <?php echo $order['order_id']; ?>
                    </td>
                    <td>
                        <?php echo $order['first_name'] . "&nbsp;" . $order['last_name']; ?>
                    </td>
                    <td>
                        <?php echo $order['order_time']; ?>
                    </td>
                    <td>
                        <?php echo $order['product']; ?>
                    </td>
                    <td>
                        <?php echo $order['order_status']; ?>
                    </td>
                    <td>
                        <?php echo $order['order_cost']; ?>
                    </td>
                    <td>
                        <?php
                        if ($order['order_status'] == "PENDING") {
                            echo "<a href='cancel.php?id=" . $order['order_id'] . "'>Cancel</a>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        echo "<a href='update.php?id=" . $order['order_id'] . "'>Update</a>";
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="searchorder">

        <h1>Manage order</h1>
        <br>

        <!-- Search Name -->
        <form class="msearch" method="post" action="">
            <p class="row"> <label for="sname">Name: </label>
                <input type="text" name="sname" id="sname">
                <input class="sbutton1" type="submit" value="Search Name">
            </p>
        </form>

        <br>

        <!-- Search for particular product -->
        <form class="msearch" method="post" action="">
            <p class="row"> <label for="sproduct">Product: </label>
                <input type="text" name="sproduct" id="sproduct">
                <input class="sbutton1" type="submit" value="Search Product">
            </p>
        </form>
        <br>
    </div>

    <!-- FOOTER -->
    <?php include("includes/footer.inc"); ?>

</body>

</html>
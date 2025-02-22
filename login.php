<!-- Please use username: manager and password: 0bdefc7766c7c2d94b088970941a6c2c to login the manager page -->
<?php
session_start();
require_once("settings.php");
$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&family=Playfair+Display:wght@400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"
        defer></script>
    <title>TCAMV</title>
</head>

<body>
    <?php
    include("includes/header.inc");
    include("includes/menu.inc");
    ?>
    <form action="login.php" method="post">
        <section class="vh-100 gradient-custom" style="background-color: #508bfc;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                            name="username" placeholder="Username" required="" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                            name="pwd" placeholder="Password" required="" />
                                    </div>

                                    <input class="btn btn-outline-light btn-lg px-5" type="submit" name="login"
                                        value="Login" style='margin-bottom: 2rem;'>
                                    <?php
                                    if (isset($_POST['login'])) {
                                        $username = $_POST['username'];
                                        $pwd = $_POST['pwd'];

                                        $select = mysqli_query($conn, "SELECT * FROM manager WHERE username = '$username' AND pwd = '$pwd'");
                                        $row = mysqli_fetch_array($select);

                                        if (is_array($row)) {
                                            $_SESSION["username"] = $row['username'];
                                            $_SESSION["pwd"] = $row['pwd'];
                                        } else {
                                            echo "<div class='alert alert-danger' role='alert'>Invalid info</div>";
                                        }
                                    }
                                    if (isset($_SESSION["username"])) {
                                        header("location:manager.php");
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </form>
    <?php include("includes/footer.inc"); ?>
</body>

</html>
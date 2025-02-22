<?php
function sanitise_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$errors = '';

if (!isset($_GET['id'])) {
	header('Location: testmanager.php');
}

$id = $_GET['id'];
require_once("settings.php");
$conn = @mysqli_connect($host, $user, $pwd, $sql_db) or die('Unable to connect');
$sql = "SELECT * FROM orders WHERE order_id ='$id'";
$result = mysqli_query($conn, $sql);
$order = mysqli_fetch_assoc($result);
$order_status = $order['order_status'];

if (isset($_POST['order_status'])) {
	$order_status = sanitise_input($_POST['order_status']);
	if (!$order_status) {
		$errors .= 'New order status is required.';
	} else {
		// Define a regular expression pattern to match valid order statuses
		$pattern = '/^(PENDING|FULFILLED|PAID|ARCHIVED)$/i';

		// Check if the input matches the pattern
		if (!preg_match($pattern, $order_status)) {
			$errors .= 'Invalid order status. Please choose one of the following: PENDING, FULFILLED, PAID, ARCHIVED.';
		}
	}

	if (!$errors) {
		$conn = mysqli_connect('feenix-mariadb.swin.edu.au', 's104177160', '191004', 's104177160_db') or die('Unable to connect');
		$sql = "UPDATE orders SET order_status = '$order_status' WHERE order_id ='$id'";
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			$errors .= 'Oops! Something went wrong. Please try again';
		} else {
			// navigate user back to all flashcards
			header('Location: manager.php?message=Updated successfully.');
		}
	}
}



// close connection
mysqli_close($conn);
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
	<div class="container" style="margin-bottom: 15rem;">
		<br>
		<h1>Edit order status</h1>

		<?php if ($errors): ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $errors; ?>
			</div>
		<?php endif; ?>

		<form action="" method="POST">
			<div class="mb-3">
				<label for="order_status" class="form-label">Order status</label>
				<input type="text" class="form-control" id="order_status" name="order_status" value \ <?php echo
					isset($order_status) ? $order_status : '';
				?>>
			</div>
			<button type="submit" class="btn btn-primary">Save</button>
		</form>
	</div>
	<?php include("includes/footer.inc"); ?>
</body>

</html>
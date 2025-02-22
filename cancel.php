<?php
if (!isset($_GET['id'])) {
    header('Location: manager.php');
}
$id = $_GET['id'];
require_once("settings.php");
$conn = @mysqli_connect($host, $user, $pwd, $sql_db) or die('Unable to connect');
$sql = "DELETE FROM orders WHERE order_id ='$id'";
$result = mysqli_query($conn, $sql);
var_dump($result);
if ($result) {
    header('Location: manager.php');
    exit;
} else {
    echo "<p>Error</p>";
}

mysqli_close($conn);
?>
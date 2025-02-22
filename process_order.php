<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    header("location: payment.php");
    exit;
}
session_start();
$_SESSION['fname'] = "";
$_SESSION['lname'] = "";
$_SESSION['email'] = "";
$_SESSION['phone'] = "";
$_SESSION['address'] = "";
$_SESSION['postcode'] = "";
$_SESSION['product'] = "";
$_SESSION['quan'] = "";
$_SESSION['comment'] = "";
$_SESSION['name'] = "";
$_SESSION['type'] = "";
$_SESSION['cre'] = "";
$_SESSION['cry'] = "";
$_SESSION['ver'] = "";
$_SESSION['date_time'] = "";
?>


<?php
 function sanitise_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 
  function array_key_coalesce($arr, $key, $default){
    if (array_key_exists($key, $arr))
        return $arr[$key];
    return $default;
  }

//Store errors for form fields
$errors = array();
 
//Initialize variables
if (isset($_POST["fname"]) && $_POST['fname'] != "") {
    $fname = sanitise_input($_POST["fname"]);
    $fname = $_POST["fname"];
    $_SESSION['fname']= $fname;
    if (!preg_match("/^[a-zA-Z]*$/", $fname)) {
        $errors["fname"] = "Only alpha letters allowed in your first name(no spaces).";
    } else if (strlen($fname) > 25) {
        $errors["fname"] = "First Name is limited to 25 characters.";
    }
} else {
    $errors["fname"] = "First name is required";
}

if (isset($_POST["lname"]) && $_POST['lname'] != "") {
    $lname = sanitise_input($_POST["lname"]);
    $lname = $_POST["lname"];
    $_SESSION['lname']= $lname;
    // Validate Last name 
    if (!preg_match("/^[a-zA-Z]*$/", $lname)) {
        $errors["lname"] =  "Only alpha letters allowed in your last name(no spaces).";
    } else if (strlen($lname) > 25) {
        $errors["lname"] =  "Last Name is limited to 25 characters.";
    }
} else {
    $errors["lname"] = "Lastname is required";
}

if (isset($_POST["email"])) {
    $email = sanitise_input($_POST["email"]);
    $email = $_POST["email"];
    $_SESSION['email']= $email;
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Remove illegal characters

    if ($email == "") {
        $errors["email"] =  "You must enter your email.";
    } else if ((filter_var($email, FILTER_VALIDATE_EMAIL)) == false) {
        $errors["email"] =  "Invalid email address.";
    }
} else {
    $errors["email"] = "Email is required";
}

if (isset($_POST["phone"]) && $_POST['phone'] != "") {
    $phone = sanitise_input($_POST["phone"]);
    $phone = $_POST["phone"];
    $_SESSION['phone']= $phone;
    if (!preg_match("/^[0-9]*$/", $phone)) {
        $errors['phone'] = "Phone number is not a valid phone number.";
    } else if (strlen($phone) != 10) {
        $errors['phone'] = "Phone number is not within the legal range(10 digits).";
    }
} else {
    $errors["phone"] = "Phone number is required";
}

if (isset($_POST["address"]) && $_POST['address'] != "") {
    $address = sanitise_input($_POST["address"]);
    $address = $_POST["address"];
    $_SESSION['address']= $address;
    if (!preg_match("/^[A-Za-z0-9'\.\-\s\,\/]*$/", $address)) {
        $errors["address"] =  "Only Characters such as ['A-Z', 'a-z', '0-9', '.', '-', '/'] are allowed for address.";
    } else if (strlen($address) > 40) {
        $errors["address"] =  "address is limited to 40 characters.";
    }
} else {
    $errors["address"] = "Address is required";
}



if (isset($_POST["postcode"]) && $_POST['postcode'] != "") {
    $postcode = sanitise_input($_POST["postcode"]);
    $postcode = $_POST["postcode"];
    $_SESSION['postcode']= $postcode;
    if (!preg_match("/^[0-9]*$/", $postcode)) {
        $errors["postcode"] =   "Postcode only accepts integers.";
    } else if (strlen($postcode) != 4) {
        $errors["postcode"] =  "Invalid Postcode in Australia(4 digits).";
    }
} else {
    $errors["postcode"] = "Postcode is required";
}

if (isset($_POST["product"]) && $_POST['product'] == 'You can choose your favored courses') { 
    $product = $_POST["product"];
    $_SESSION['product']= $product;
    $errors["product"] = "Please select an option";
} else if (isset($_POST["product"]) && $_POST['product'] == 'Cinematography Basics: Filmmaking Style - $130') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Public Relations Project and Campaign Planning - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Principles of Advertising - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Introduction to Programming - $60') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Networking Fundamentals - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Fundamentals of Data Visualization - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Developing Teamwork Skills - $50') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'The Art of Public Speaking - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else if (isset($_POST["product"]) && $_POST['product'] == 'Global Logistics and Supply Chain Management - $100') {
    $product = $_POST["product"];
    $_SESSION['product']= $product;
} else {
    $errors["product"] = "Please select an option";
}


if (isset($_POST["quan"]) && ($_POST["quan"])){
    $quan = sanitise_input($_POST["quan"]);
    $_SESSION['quan']= $quan;
    if (!preg_match("/^[0-9]*$/", $quan)) {
        $errors["quan"] = "Quantity only accepts integers.";
    } else {
        $quan = $_POST["quan"];
    }
} else {
    $errors["quan"] = "Quantity is required";
}


if (isset($_POST["type"])) {
    $type = sanitise_input($_POST["type"]);
    $type = $_POST["type"];
    $_SESSION['type']= $type;
} else {
    $errors["type"] = "Please enter your credit card type";
}

if (isset($_POST["name"]) && $_POST['name'] != "") {
    $name = sanitise_input($_POST["name"]);
    $name = $_POST["name"];
    $_SESSION['name']= $name;
    if (!preg_match("/^[A-Z\s]+$/", $name)) {
        $errors["name"] =  "Your credit card name should be capitalized.";
    } else if (strlen($name) > 100) {
        $errors["name"] =  "Your credit card name is limited to 100 characters.";
    }
} else {
    $errors["name"] = "Please enter your credit card name";
}

if (isset($_POST["comment"]) && $_POST['comment'] != "") {
    $comment = sanitise_input($_POST["comment"]);
    $comment = $_POST["comment"];
    $_SESSION['comment']= $comment;
} else {
    $errors["comment"] = "Please enter your comment";
}

if (isset($_POST["cre"])) {
    $cre = sanitise_input($_POST["cre"]);
    $cre = $_POST["cre"];
    $_SESSION['cre']= $cre;

    if ($cre == "") {
        $errors['cre'] = "Credit Card number is required.";
    } else if (!preg_match("/^[0-9]*$/", $cre)) {
        $errors['cre'] = "Credit Card number only accepts integers.";
    } else if ($type == "Visa") {
        // Visa should start with 4 and be 16 digits long
        if (!preg_match("/^4\d{15}$/", $cre)) {
            $errors['cre'] = "Invalid card number (must start with 4 and contains 16 digits).";
        } 
    } else if ($type == "Mastercard") {
        // Mastercard should start with 51-55 and be 16 digits long
        if (!preg_match("/^5[1-5]\d{14}$/", $cre)) {
            $errors['cre'] = "Invalid card number (must start with 51 to 55 and contains 16 digits).";
        } 
    } else if ($type == "American Express") {
        // American express should start with 34/37 and be 15 digits long
        if (!preg_match("/^3[4-7]\d{13}$/", $cre)) {
            $errors['cre'] = "Invalid card number (must start with 34 to 37 and contains 15 digits).";
        } 
    }
} else {
    $errors["cre"] = "Please enter your credit card number";
}

//Validate Expiry Date 
if (isset($_POST["cry"]) && $_POST['cry'] != "") {
    $cry = sanitise_input($_POST["cry"]);
    $cry = $_POST["cry"];
    $_SESSION['cry']= $cry;
    if (!preg_match("/^(0[1-9]|1[0-2])\/\d{2}$/",$cry)){
        $errors['cry'] = "Expiry date must follow the rule mm/yy and don't forget the /.";
    }
} else {
    $errors["cry"] = "Please enter your credit card expiry date";
}

if (isset($_POST["ver"]) && $_POST['ver'] != "") {
    $ver = sanitise_input($_POST["ver"]);
    $ver = $_POST["ver"];
    $_SESSION['ver']= $ver;

    if (!preg_match("/^[0-9]*$/", $ver)) {
        $errors['ver'] = "Verification value only accepts integers.";
    } elseif (!preg_match("/^\d{4}$/", $ver)){
        $errors['ver'] = "Verification value must be exactly 4 digits.";

    }
} else {
    $errors["ver"] = "Please enter your verification value";
}

$date_time = date('Y-m-d H:i:s');


// Used to reuse data for fix_order.php fields and receipt page


// If any errors, redirect to fix order
if (empty($errors) == false) {
    $_SESSION["errors"] = $errors;
    header("location: fix_order.php");
    return;
} else {
    if (!isset($processed)) {
        $processed = true; // Set flag variable
        $cost = preg_replace('/[^0-9]/', '', $product);
        $total_cost = $cost * $quan;
    }
    $_SESSION['values'] = array(
        'product' => $product,
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'postcode' => $postcode,
        'type' => $type,
        'quan' => $quan,
        'name' => $name,
        'comment' => $comment,
        'total_cost' => $total_cost,
    );
    require_once ("settings.php");
    $conn = @mysqli_connect($host,
          $user,
          $pwd,
          $sql_db);
      if (!$conn) {
          echo "<p>Database connection failure</p>";
      } else {
          $sql_table = "orders";
          $query = "INSERT INTO $sql_table (first_name, last_name, email, phone_number, delivery_address, postcode, product, 
          quantity, comments, name_on_card, credit_card_type, credit_card_number, credit_card_expiry, cvv, order_cost, order_time) 
          values ('$fname', '$lname', '$email', '$phone', '$address', '$postcode', '$product', '$quan', '$comment','$name', 
          '$type', '$cre', '$cry', '$ver', '$total_cost', '$date_time')";
          if ($conn->query($query) === TRUE) {
              // Get the last inserted ID as the order ID
              $order_id = $conn->insert_id;
              $_SESSION['order_id'] = $order_id;
              $_SESSION['order_time'] = $date_time;
              // Retrieve the order status from the orders table
              $query = "SELECT order_status FROM orders WHERE order_id = $order_id";
              $result = $conn->query($query);
              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $order_status = $row['order_status'];
                  $_SESSION['order_status'] = $order_status;
              }
              mysqli_close($conn);
              header('Location: receipt.php');
          } else {
              echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
          }
      }
}
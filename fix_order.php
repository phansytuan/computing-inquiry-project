<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    header("location: payment.php");
    exit;
}
session_start();

$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION["address"];
$postcode = $_SESSION["postcode"];
$product = $_SESSION["product"];
$quan = $_SESSION["quan"];
$comment = $_SESSION["comment"];
$name = $_SESSION["name"];
$type = $_SESSION["type"];
$cre = $_SESSION["cre"];
$cry = $_SESSION["cry"];
$ver = $_SESSION["ver"];


function sanitise_input($data)
 {
     $data = trim($data);
     $data = stripcslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 

 function array_key_coalesce($arr, $key,$default){
    if (array_key_exists($key, $arr))
        return $arr[$key];

    return $default;
 }
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
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>TCAMV</title>
</head>
<body>
<?php
    include("includes/header.inc");
    include("includes/menu.inc");
    ?>
<?php if ($_SESSION["errors"]): ?>
            <div class="alert alert-danger" role="alert">
            <p><?= array_key_coalesce($_SESSION["errors"], 'fname', "")?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'lname',"") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'email', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'phone', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'address', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'postcode', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'product', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'quan', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'comment', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'name', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'cre', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'cry', "") ?></p>
            <p><?= array_key_coalesce($_SESSION["errors"], 'ver', "") ?></p> 
            </div>
        <?php endif; ?>

        
    <div class="vu12">
        <div class="vu13">
            <div class="vu14">Error Feedbacks</div>
            <form method="post" action="process_order.php" novalidate="novalidate">
            <div class="vu15">
                            <label for="fname">First Name</label>
                            <input value="<?php echo $fname;?>" type="text" name="fname" id="fname" required="required" pattern="^[a-zA-Z ]+$" maxlength="25" placeholder="Please enter your first name" title="Please enter no more than 25 characters">
                            
                        </div>
                    <div class="vu15">
                            <label for="lname">Last Name</label>
                            <input value="<?php echo $lname;?>" type="text" name="lname" id="lname" required="required" pattern="^[a-zA-Z ]+$" maxlength="25" placeholder="Please enter your last name" title="Please enter no more than 25 characters">
                    </div>
                    <div class="vu15">
                            <label for="email">Email</label>
                            <input value="<?php echo $email;?>" type="email" name="email" id="email" required="required" placeholder="Please enter your email address">
                    </div>
                    <div class="vu15">
                            <label for="phone">Phone number</label>
                            <input value="<?php echo $phone;?>" type="text" name="phone" id="phone" required="required" pattern="[0-9]{0,10}" placeholder="XXXX-YYYY-ZZ" title="Please enter exactly 10 digits">
                    </div>
                        <div class="vu15">
                            <label for="address">Delivery address</label>
                            <input value="<?php echo $address;?>" type="text" name="address" id="address" required="required" maxlength="40" placeholder="Please enter your street address" title="Please enter no more than 40 characters">
                        </div>
                        <div class="vu15">
                            <label for="postcode">Postcode</label>
                            <input value="<?php echo $postcode;?>" type="text" name="postcode" id="postcode" required="required" pattern="\d{4}" placeholder="Please enter your postcode" title="Please enter exactly 4 digits">
                        </div>     
                    <div class="vu15">
                            <label for="product">Product</label>
                            <select name="product" id="product">
                                <option value="<?php echo $product;?>"><?php echo $product;?></option>
                                <option value="You can choose your favored courses" >You can choose your favored courses</option>
                                <option value="Cinematography Basics: Filmmaking Style - $130">Cinematography Basics: Filmmaking Style - $130</option>
                                <option value="Public Relations Project and Campaign Planning - $100">Public Relations Project and Campaign Planning - $100</option>
                                <option value="Principles of Advertising - $100">Principles of Advertising - $100</option>
                                <option value="Introduction to Programming - $60">Introduction to Programming - $60</option>
                                <option value="Networking Fundamentals - $100">Networking Fundamentals - $100</option>
                                <option value="Fundamentals of Data Visualization - $100">Fundamentals of Data Visualization - $100</option>
                                <option value="Developing Teamwork Skills - $50">Developing Teamwork Skills - $50</option>
                                <option value="The Art of Public Speaking - $100">The Art of Public Speaking - $100</option>
                                <option value="Global Logistics and Supply Chain Management - $100">Global Logistics and Supply Chain Management - $100</option>
                            </select>
                    </div>
                    <div class="vu15">
                            <label for="quan">Quantity</label>
                            <input value="<?php echo $quan;?>" type="text" name="quan" id="quan" required="required" pattern="\d{4}" placeholder="Number of courses you would like to purchase" title="Please enter exactly 4 digits">
                    </div>
                    <div class="vu21">
                        <label for="comment">Comment fields</label>
                        <textarea required="required" id="comment" name="comment" placeholder="You can deliver your message to us right here"><?php echo $comment;?></textarea>
                    </div>
                    <div class="vu15">
                        <label for="name">Name On Card</label>
                        <input value="<?php echo $name;?>" type="text" name="name" id="name" required="required" pattern="[A-Z]+" placeholder="Please enter your name on card" title="Your name on card must be capitalized" >
                    </div>
                    <div class="vu17">
                        <div class="vu18">
                            Credit Card Type
                        </div>
                        <input type="radio" id="Visa" name="type" <?php if (isset($type) && $type=="Visa") echo "checked";?> value="Visa" required="required"> 
                        <label for="Visa">Visa</label>
                        <input type="radio" id="Mastercard" name="type" <?php if (isset($type) && $type=="Mastercard") echo "checked";?> value="Mastercard" required="required"> 
                        <label for="Mastercard">Mastercard</label>
                        <input type="radio" id="American Express" name="type" <?php if (isset($type) && $type=="American Express") echo "checked";?> value="American Express" required="required"> 
                        <label for="American Express">American Express</label>
                    </div>
                    <div class="vu15">
                        <label for="cre">Credit Card Number</label>
                        <input value="<?php echo $cre;?>" type="text" name="cre" id="cre" required="required" pattern="[0-9]+" placeholder="WWWW-XXXX-YYYY-ZZZZ OR WWWW-XXXX-YYYY-ZZZ" title="Your credit card must be a number">
                    </div> 
                    <div class="vu15">
                        <label for="cry">Credit Card Expiry Date</label>
                        <input value="<?php echo $cry;?>" type="text" name="cry" id="cry" required="required" pattern="(0[1-9]|1[0-2])\/([0-9]{2})" placeholder="MM/YY" title="The expiry date must be written as mm/yy">
                    </div>
                    <div class="vu15">
                        <label for="ver">Card Verification Value</label>
                        <input value="<?php echo $ver;?>" type="text" name="ver" id="ver" required="required" pattern="[0-9]+" placeholder="YYYY" title="Your card verfication value must be a number">
                    </div>
                <div class="vu22">
                    <input type="submit" value="Check out">
                </div>
            </form>
        </div>
    </div>
    <?php include("includes/footer.inc"); ?>
</body>
</html>
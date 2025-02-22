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
        <title>TCAMV</title>
    </head>
    <body>
    <?php
    include("includes/header.inc");
    include("includes/menu.inc");
    ?>
        <div class="vu12">
            <div class="vu13">
                <div class="vu14">Payment Form</div>
                <form method="post" action="process_order.php" novalidate>
                        <div class="vu15">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" required="required" pattern="^[a-zA-Z ]+$" maxlength="25" placeholder="Please enter your first name" title="Please enter no more than 25 characters">
                        </div>
                        <div class="vu15">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" required="required" pattern="^[a-zA-Z ]+$" maxlength="25" placeholder="Please enter your last name" title="Please enter no more than 25 characters">
                        </div>
                        <div class="vu15">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required="required" placeholder="Please enter your email address">
                        </div>
                        <div class="vu15">
                                <label for="phone">Phone number</label>
                                <input type="text" name="phone" id="phone" required="required" pattern="[0-9]{0,10}" placeholder="XXXX-YYYY-ZZ" title="Please enter exactly 10 digits">
                        </div>
                            <div class="vu15">
                                <label for="address">Delivery address</label>
                                <input type="text" name="address" id="address" required="required" maxlength="40" placeholder="Please enter your street address" title="Please enter no more than 40 characters">
                            </div>
                            <div class="vu15">
                                <label for="postcode">Postcode</label>
                                <input type="text" name="postcode" id="postcode" required="required" pattern="\d{4}" placeholder="Please enter your postcode" title="Please enter exactly 4 digits">
                            </div>     
                        <div class="vu15">
                                <label for="product">List of Products</label>
                                <select name="product" id="product">
                                    <option value="You can choose your favored courses">You can choose your favored courses</option>
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
                                <input type="text" name="quan" id="quan" required="required" pattern="\d{4}" placeholder="Number of courses you would like to purchase" title="Please enter exactly 4 digits">
                        </div>
                        <div class="vu21">
                            <label for="comment">Comment fields</label>
                            <textarea id="comment" name="comment" placeholder="You can deliver your message to us right here"></textarea>
                        </div>
                        <div class="vu15">
                            <label for="name">Name On Card</label>
                            <input type="text" name="name" id="name" required="required" pattern="[A-Z]+" placeholder="Please enter your name on card" title="Your name on card must be capitalized">
                        </div>
                        <div class="vu17">
                            <div class="vu18">
                                Credit Card Type
                            </div>
                            <input type="radio" id="Visa" name="type" value="Visa" required="required"> 
                            <label for="Visa">Visa</label>
                            <input type="radio" id="Mastercard" name="type" value="Mastercard" required="required"> 
                            <label for="Mastercard">Mastercard</label>
                            <input type="radio" id="American Express" name="type" value="American Express" required="required"> 
                            <label for="American Express">American Express</label>
                        </div>
                        <div class="vu15">
                            <label for="cre">Credit Card Number</label>
                            <input type="text" name="cre" id="cre" required="required" pattern="[0-9]+" placeholder="WWWW-XXXX-YYYY-ZZZZ OR WWWW-XXXX-YYYY-ZZZ" title="Your credit card must be a number">
                        </div> 
                        <div class="vu15">
                            <label for="cry">Credit Card Expiry Date</label>
                            <input type="text" name="cry" id="cry" required="required" pattern="(0[1-9]|1[0-2])\/([0-9]{2})" placeholder="MM/YY" title="The expiry date must be written as mm/yy">
                        </div>
                        <div class="vu15">
                            <label for="ver">Card Verification Value</label>
                            <input type="text" name="ver" id="ver" required="required" pattern="[0-9]+" placeholder="XXXX" title="Your card verfication value must be a number">
                        </div>
                    <div class="vu22">
                        <input type="submit" value="Check Out">
                    </div>
                </form>
            </div>
        </div>
        <?php include("includes/footer.inc"); ?>
    </body>
    </html>
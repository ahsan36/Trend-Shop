<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - My Cart</title>

    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="mycart.css">
    
</head>
<body>
    
    <!------------ Navbar ------------->

    <!--------- Logo ------->

    <section id="header">
        <a href="mycart.php"> <img src="../img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="mycart.php"><button class="btn_search">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Shop/shop.php">Products</a></li>
                <li><a href="../About/about.php">About</a></li>
                <li><a href="../Contact/contact.php">Contact</a></li>
                <li id="lg-bag">
                    <a href="mycart.php">
                        <i class="fas fa-shopping-cart cart"></i>
                    </a>
                    <?php
                        $count = 0;
                        if(isset($_SESSION['cart'])){

                        $count = count($_SESSION['cart']);
                        }
                    ?>
                    <span class="count"><?php echo $count; ?></span>
                </li>
                <a href="mycart.php" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>

        <!--------------for Mobile bar and Shopping icon ------>

        <div id="mobile">
            <li>
                <a href="mycart.php">
                    <i class="fas fa-shopping-cart cart"></i>
                </a>
                <?php
                    $count = 0;
                    if(isset($_SESSION['cart'])){

                    $count = count($_SESSION['cart']);
                    }
                ?>
                <span class="count"><?php echo $count; ?></span>
            </li>
            <i id="bar" class="fas fa-bars"></i>
        </div>

    </section>

    <!-- My Cart Added Item -->
    

    <div class="container">
        <div class="row">

        <?php
        // session_start();

        if($_SESSION['userSession']){

            echo '<div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>'; 
        }else {
            header("location:../Login/login.php");
        }  
        ?> 
        
        <!-- Table of items, price and remove button -->

            <div id="itm" class="col-lg-9">

                <!----- Table ------>
                <table class="table">
                    <thead class="text-center border rounded">
                        <tr>
                        <th scope="col">Serial NO.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>

                        <!-- Remove Button-->
                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                    <!-- PHP Code Start -->

                        <?php

                            if(isset($_SESSION['cart'])){

                                foreach ($_SESSION['cart'] as $key => $value) {

                                    // Increase Serial number
                                    $sr = $key + 1;

                                    echo "
                                        <tr>
                                            <th>$sr</th>
                                            <td>$value[Item_Name]</td>
                                            <td> $$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                            <td>
                                                <form action='manageCart.php' method='POST'>
                                                    <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>    
                                            </td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form action='manageCart.php' method='POST'>
                                                    <button id='itm' name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>

                        <!-- PHP Code End -->

                    </tbody>
                </table>
            </div>


            <!------- Total Price ------>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total Price: </h4>

                    <!-- Total Price Of All Item -->
                    
                    <h5 class="text-end" id="gtotal"></h5>
                    <br>

                    <!-- If Items exist then show form -->

                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                    ?>

                    <form action="purchase.php" method="POST">

                        <div class="form-group mb-3">
                            <label>Full Name</label>
                            <input type="text" name="Full_Name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Mobile Number</label>
                            <input type="text" name="Mobile_No" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control" required>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Pay_Mode" value="COD" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery    
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block mt-3" name="purchase">Make Purchase</button>
                    </form>

                    <?php
                        }
                    ?>

                    <!-- If block end -->

                </div>
            </div>

        </div>
    </div>

    <!------- Newsletter ------->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Enter your email to be the first to know about new collections and product launches and <span>special offers.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Enter your email">
            <a href="../Login/login.php"><button class="normal btn-login">Sign Up</button></a>
        </div>
    </section>

    <!-------- Footer ------->

    <!-------- Back to top ------->

    <div class="foot-panel1">
        <a href="mycart.php">Back to top</a>
    </div>

    <!-------- Main Footer ------->

    <footer class="section-p1">
        <div class="col">

            <!------ Footer Logo ------>

            <img class="logo" src="../img/Trend.png" alt="">

            <h4>Contact</h4>
            <p><strong>Address: </strong>22km Mile Stone,
                Roorkee-247667 (Uttarakhand) India</p>

            <p><strong>Phone:</strong>(+91) 99 9999 9999</p>

            <p><strong>Hours:</strong>10:00 - 21:00, Mon - Sat</p>

            <!------- Follow link ------>

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/iahsan01/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        
        <!------- Footer About ------->
        
        <div class="col">
            <h4>About</h4>
            <a href="../About/about.php">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="../Contact/contact.php">Contact Us</a>
        </div>


        <div class="col">
            <h4>My Account</h4>
            <a href="../Login/login.php">Sign In</a>
            <a href="mycart.php">View Cart</a>
            <a href="mycart.php">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="../Contact/contact.php">Help</a>
        </div>

        <!------ App install image ----->

        <div class="col install">
            <h4>Install App</h4>

            <p>From App Store or Google Play</p>

            <div class="row">
                <img src="../img/pay/app.jpg" alt="">
                <img src="../img/pay/play.jpg" alt="">
            </div>

            <p>Secure Payment Gateway</p>
            <img src="../img/pay/pay.png" alt="">
        </div>

        <!------- Copyright ------->

        <div class="copyright">
            <p>Copyright © 2023, Trend Shop | Made by Ahsan</p>
        </div>

    </footer>

    <!-------- Link JavaScript ------>

    <script src="../script.js"></script>

    <!-------- Script ------->

    <script>

        // Total item price
        var gt = 0;

        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal(){
            gt = 0;
            for(i=0; i<iprice.length; i++){
                itotal[i].innerText = "$" + (iprice[i].value) * (iquantity[i].value);

                // Total item price
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }

            gtotal.innerText = "$"+ gt;
        }

        subTotal();

    </script>
    
</body>
</html>
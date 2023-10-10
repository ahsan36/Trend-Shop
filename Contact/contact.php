<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - Contact Me</title>
    
    <!---------- Favicon -------->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <!------------ Navbar ------------->

    <!--------- Logo ------->

    <section id="header">
        <a href="contact.php"> <img src="../img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="contact.php"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Shop/shop.php">Products</a></li>
                <li><a href="../About/about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag">
                    <a href="../Shopping-cart/mycart.php">
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
                <a href="contact.php" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>

        <!--------------for Mobile bar and Shopping icon ------>

        <div id="mobile">
            <li>
                <a href="../Shopping-cart/mycart.php">
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

    <!-------- Page Heading ------->

    <section id="page-header" class="about-header">
       <div class="get-con">
        <h1>#GET IN TOUCH</h1>
        </div>
    </section>

    <!--------------- Form -------------->

    <section id="form-details">
        <form action="sendMsg.php" method="POST">
            <span>LEAVE A MESSAGE</span>

            <?php
                $Msg = "";
                if(isset($_GET['error'])){
                    $Msg = "Please Fill in the blanks";
                    echo "
                    <div class='alert alert-danger'
                     style='color:red;background-color: RGB(248, 215, 218);'>
                     $Msg
                    </div>";
                }

                if(isset($_GET['success'])){
                    $Msg = "Message has been sent";
                    echo "
                    <div class='alert alert-danger'
                     style='color:green;background-color: RGB(212, 237, 218);'>
                     $Msg
                    </div>";
                }
            ?>
            <br>
            <input type="text" name="UName" placeholder="User Name">
            <input type="email" name="Email" placeholder="Email">
            <input type="text" name="Subject" placeholder="Subject">
            <textarea name="msg" cols="30" rows="10" placeholder="Write The Message"></textarea>
            <button class="normal" name="btn-send">Submit</button>
        </form>
    </section>

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
        <a href="contact.php">Back to top</a>
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
            <a href="../Shopping-cart/mycart.php">View Cart</a>
            <a href="../Shopping-cart/mycart.php">My Wishlist</a>
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

</body>
</html>
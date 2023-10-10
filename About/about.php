<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - All About Trend Shop</title>

    <!---------- Favicon -------->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <!------------ Navbar ------------->

    <!--------- Logo ------->
    
    <section id="header">
        <a href="about.php"> <img src="../img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="about.php"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Shop/shop.php">Products</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="../Contact/contact.php">Contact</a></li>
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
                <a href="about.php" id="close"><i class="fas fa-times"></i></a>
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

    <!----- Page Heading ----->

    <section id="page-header" class="about-header">
        <div>
            <div class="get-con">
                <h1>#ABOUT US</h1>
            </div>
    </section>

     <!----- Content About Trend Shop ----->

    <section id="about-head" class="section-p1">
        <img src="about.png" alt="about-img">
        <div>
            <h2>Trend Shop</h2>
            <p>Trend Shop is E-Commerce Website. This is Full functional website. User can login and register on our website. And also User can add products in cart and remove products from cart.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit odit sit unde cupiditate deserunt nihil velit distinctio, voluptatem, totam eum illum ea non consectetur quaerat nobis quos soluta atque voluptate?<br><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, earum odio expedita alias temporibus sequi asperiores fuga. Saepe, rem amet.
            </p>
        </div>
    </section>

    <!-------- Contact details ------->

    <section id="contact-details" class="section-p1">

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.9917414774195!2d77.7610161752969!3d30.00839352027844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ec88c479bdbdb%3A0x30485550e6060b54!2sQuantum%20University!5e0!3m2!1sen!2sin!4v1695067998109!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="details">
            <h2>Visit one of our locations or contact us today</h2>
            <div>
                <li>
                    <i class="fas fa-map"></i>
                    <p>22km Mile Stone, Roorkee-247667 (Uttarakhand) India</p>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <p>trendshop@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>(+91) 99 9999 9999</p>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <p>10:00 - 21:00, Mon - Sat</p>
                </li>
            </div>
        </div>

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
        <a href="about.php">Back to top</a>
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
            <a href="about.php">About Us</a>
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
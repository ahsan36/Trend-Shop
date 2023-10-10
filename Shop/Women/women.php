<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - All Products</title>

    <!---------- Favicon -------->
    <link rel="shortcut icon" href="../../favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="../shop.css">
    <link rel="stylesheet" href="../../style.css">

</head>
<body>

    <!------------ Navbar ------------->

    <!--------- Logo ------->

    <section id="header">
        <a href="women.php"> <img src="../../img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="women.php"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a href="../../index.php">Home</a></li>
                <li><a class="active" href="../shop.php">Products</a></li>
                <li><a href="../../About/about.php">About</a></li>
                <li><a href="../../Contact/contact.php">Contact</a></li>
                <li id="lg-bag">
                    <a href="../../Shopping-cart/mycart.php">
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
                <a href="women.php" id="close"><i class="fas fa-times"></i></a>

                <!-- <a href="../Login/login.html"><button class="btn-popup">Login</button></a> -->
            </ul>
        </div>

        <!--------------for Mobile bar and Shopping icon ------>

        <div id="mobile">
            <li>
                <a href="../../Shopping-Cart/mycart.php">
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

    <!----------- Product1 -------->

    <section id="product1" class="section-p1">
        <h2>Features Products</h2>
        <p>All Collections New Modern Design</p>

        <div class="pro-container">

            <div class="pro">
               <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/product-01.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>New T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$190</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/product-02.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>Casual T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$230</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/product-03.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>New Pattern Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$150</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/product-04.jpg" alt=""></a>
                <div class="des">
                    <span>aClothing</span>
                    <h5>Simple T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$250</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/1.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>Colorful Pattern Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$190</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/2.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$230</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/3.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>New T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$190</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="../../Product Details/womenProduct.php"><img src="../../img/products/Women/4.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$250</h4>
                </div>
                <a class="cart" href="../../Product Details/womenProduct.php">See More</a>
            </div>            

        </div>
    </section>

    <!------ Pagination ------->

    <section id="pagination" class="section-p1">
        <a href="women.php">1</a>
        <a href="../shop.php">2</a>
        <a href="../shop.php"><i class="fas fa-long-arrow-alt-right"></i></a>
    </section>

    <!------- Newsletter ------->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Enter your email to be the first to know about new collections and product launches and <span>special offers.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Enter your email">
            <a href="../../Login/login.php"><button class="normal btn-login">Sign Up</button></a>
        </div>
    </section>

    <!-------- Footer ------->

    <!-------- Back to top ------->

    <div class="foot-panel1">
        <a href="women.php">Back to top</a>
    </div>

    <!-------- Main Footer ------->

    <footer class="section-p1">

        <div class="col">

            <!------ Footer Logo ------>

            <img class="logo" src="../../img/Trend.png" alt="">

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
            <a href="../../About/about.php">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="../../Contact/contact.php">Contact Us</a>
        </div>


        <div class="col">
            <h4>My Account</h4>
            <a href="../../Login/login.php">Sign In</a>
            <a href="../../Shopping-Cart/mycart.php">View Cart</a>
            <a href="../../Shopping-Cart/mycart.php">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="../../Contact/contact.php">Help</a>
        </div>

        <!------ App install image ----->

        <div class="col install">
            <h4>Install App</h4>

            <p>From App Store or Google Play</p>

            <div class="row">
                <img src="../../img/pay/app.jpg" alt="">
                <img src="../../img/pay/play.jpg" alt="">
            </div>

            <p>Secure Payment Gateway</p>
            <img src="../../img/pay/pay.png" alt="">
        </div>

        <!------- Copyright ------->

        <div class="copyright">
            <p>Copyright © 2023, Trend Shop | Made by Ahsan</p>
        </div>

    </footer>

    <!------ Link JavaScript ------>

    <script src="../../script.js"></script>
    
</body>
</html>
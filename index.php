<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Best Shopping Website">
    <meta name="keywords" content="Boy's T-Shirts, Girl's T-Shirts, Casual, Summer Shirts">
    <meta name="author" content="Ahsan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - Best Shopping Website</title>

    <!---------- Favicon -------->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!------------ Navbar ------------->

    <!--------- Logo ------->

    <section id="header">
        <a href="index.php"> <img src="img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="index.php"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="Shop/shop.php">Products</a></li>
                <li><a href="About/about.php">About</a></li>
                <li><a href="Contact/contact.php">Contact</a></li>
                <li id="lg-bag">
                    <a href="Shopping-cart/mycart.php">
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
                <a href="index.php" id="close"><i class="fas fa-times"></i></a>
                <!-- <a href="Login/login.php"><button class="btn-popup">Login</button></a> -->

                <!-------------- PHP Code Start ------------->

                <?php
                    // session_start();
                    if(isset($_SESSION['userSession'])){
                        // echo $_SESSION['userSession'];
                
                        echo "
                            <a href='Login/logout.php'><button class='btn-logout'>Logout</button></a>
                        ";
                    }else{
                        echo "
                            <a href='Login/login.php'><button class='btn-popup'>Login</button></a>
                        ";
                    }
                ?>

                <!-------------- PHP Code End ------------->
            </ul>
        </div>

        <!--------------for Mobile, bar and Shopping cart icon ------>

        <div id="mobile">
            <li>
                <a href="Shopping-cart/mycart.php">
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

    <!---------- Home Page --------->

    <section id="hero">
        <h4>Trade in offer</h4>
        <h2>Fashion Trending</h2>
        <h1>Great Collections</h1>
        <p>Trending from men's and women's style collection</p>

        <a href="Shop/shop.php"><button>Shop Now</button></a>
    </section>

     <!------------- SERVICE --------->

      <section class="service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="img/service/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>

                <p class="service-item-text">On All Order Over $599</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="img/service/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>

                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="img/service/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>

                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="img/service/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>

                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>

    <!----------- CATEGORY --------------->

      <section class="section category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="img/category/category-1.jpg">
              </figure>

              <a href="Shop/shop.php" class="btn-ct btn-secondary">New Fashion</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="img/category/category-2.jpg">
              </figure>

              <a href="Shop/shop.php" class="btn-ct btn-secondary">Active & Outdoor</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img class="sm-img" src="img/category/category-3.png.webp">
              </figure>

              <a href="Shop/Women/women.php" class="btn-ct btn-secondary">Women's New Design</a>
            </li>

          </ul>

        </div>
      </section>

    <!----------- Product1 -------->

    <section id="product1" class="section-p1">
        <h2>Products of the week</h2>
        <p>Collections of New Modern Design</p>

        <div class="pro-container">
            <div class="pro">
                <a href="Product Details/product.php"><img src="img/products/f1.jpg" alt=""></a>
                <div class="des">
                    <span>clothing</span>
                    <h5>Different Color Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$190</h4>
                </div>
                <a class="cart" href="Product Details/product.php">See More</a>
            </div>

            <div class="pro">
                <a href="Product Details/product.php"><img src="img/products/f6.jpg" alt=""></a>
                <div class="des">
                    <span>adidas</span>
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
                <a class="cart" href="Product Details/product.php">See More</i></a>
            </div>

            <div class="pro">
                <a href="Product Details/product.html"><img src="img/products/f5.jpg" alt=""></a>
                <div class="des">
                    <span>clothing</span>
                    <h5>Casual Boy's Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$150</h4>
                </div>
                <a class="cart" href="Product Details/product.php">See More</a>
            </div>

            <div class="pro">
                <a href="Product Details/product.php"><img src="img/products/f3.jpg" alt=""></a>
                <div class="des">
                    <span>adidas</span>
                    <h5>Formal Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$250</h4>
                </div>
                <a class="cart" href="Product Details/product.php">See More</a>
            </div>

        </div>
    </section>

    <!----------- Banner ---------->

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>20% Off</span> - All t-shirts & Accessories</h2>
        <a href="Shop/shop.php"><button class="normal">Explore More</button></a>
    </section>

     <!----------- Product2 -------->

     <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Collections of Women's Design</p>

        <div class="pro-container">

            <div class="pro">
                <a href="Product Details/womenProduct.php"><img src="img/products/Women/product-01.jpg" alt=""></a>
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
                <a class="cart" href="Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="Product Details/womenProduct.php"><img src="img/products/Women/product-02.jpg" alt=""></a>
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
                <a class="cart" href="Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="Product Details/womenProduct.php"><img src="img/products/Women/product-03.jpg" alt=""></a>
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
                <a class="cart" href="Product Details/womenProduct.php">See More</a>
            </div>

            <div class="pro">
                <a href="Product Details/womenProduct.php"><img src="img/products/Women/product-04.jpg" alt=""></a>
                <div class="des">
                    <span>Clothing</span>
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
                <a class="cart" href="Product Details/womenProduct.php">See More</a>
            </div>

        </div>
    </section> 


    <!------- Banner2 -------->

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Limited quantity</h4>
            <h2>Deals of the day</h2>
            <span>Summer collection new modern design</span>
            <button class="white">Shop Now</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>shirt & bag</h4>
            <h2>Women Clothing</h2>
            <span>Try something new on vacation</span>
            <button class="white">Shop Now</button>
        </div>
    </section>

    <!-------- Banner3 ------->

    <section id="banner3">
        <div class="banner-box">            
            <h2>UPCOMING SEASON</h2>
            <h3>Trend Collection -50% OFF</h3>            
        </div>
        
        <div class="banner-box banner-box2">            
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>spring/summer 2023</h3>            
        </div> 

        <div class="banner-box banner-box3">            
            <h2>GIRLS COLLECTION</h2>
            <h3>New Trendy Prints</h3>            
        </div> 
    </section>

    <!------- Newsletter ------->

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Enter your email to be the first to know about new collections and product launches. <span>special offers.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Enter your email">
            <a href="Login/login.php"><button class="normal btn-login">Sign Up</button></a>
        </div>
    </section>

    <!-------- Footer ------->

    <!-------- Back to top ------->

    <div class="foot-panel1">
        <a href="index.php">Back to top</a>
    </div>

    <!-------- Main Footer ------->

    <footer class="section-p1">
        <div class="col">

            <!------ Footer Logo ------>

            <img class="logo" src="img/Trend.png" alt="">

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
                    <!-- <a href="#"><i class="fab fa-github"></i></a> -->
                </div>
            </div>
        </div>
        
        <!------- Footer About ------->
        
        <div class="col">
            <h4>About</h4>
            <a href="About/about.html">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="Contact/contact.php">Contact Us</a>
        </div>


        <div class="col">
            <h4>My Account</h4>
            <a href="Login/login.php">Sign In</a>
            <a href="Shopping/mycart.php">View Cart</a>
            <a href="Shopping/mycart.php">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="Contact/contact.php">Help</a>
        </div>

        <!------ App install image ----->

        <div class="col install">
            <h4>Install App</h4>

            <p>From App Store or Google Play</p>

            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>

            <p>Secure Payment Gateway</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <!------- Copyright ------->

        <div class="copyright">
            <p>Copyright © 2023, Trend Shop | Made by Ahsan</p>
        </div>

    </footer>

    <!-------- Link JavaScript ------>

    <script src="script.js"></script>
</body>
</html>
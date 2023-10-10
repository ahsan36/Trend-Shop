<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - Register</title>

    <!---------- Favicon -------->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="register.css">
</head>
<body>

    <!------------ Navbar ------------->

    <!--------- Logo ------->

    <section id="header">
        <a href="#"> <img src="../img/Trend.png" class="logo" alt=""></a>

        <div>

            <!-------- Search button ------->

            <div class="search">
                <input type="text" class="srch" name="" placeholder="Search for items..">
                <a href="index.html"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="index.php">Shop</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact</a></li>
                <li id="lg-bag"><a href="index.php"><i class="fas fa-shopping-cart cart"></i></a></li>
                <a href="../index.php" id="close"><i class="fas fa-times"></i></a>

                <a href="Login/register.php"><button class="btn-login">Login</button></a>
            </ul>
        </div>

        <!--------------for Mobile bar and Shopping icon ------>

        <div id="mobile">
            <a href="index.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-bars"></i>
        </div>

    </section>

    <!---------- Home Page --------->

    <section id="hero">
        <h4>Trade in offer</h4>
        <h2>Fashion Trending</h2>
        <h1>Great Collections</h1>
        <p>Save more with coupons & up to 20% off</p>

        <button>Shop Now</button>
    </section>

    <!-- Login Page -->

    <div class="wrapper">

        <!--------- Close icon ----------->

        <span class="icon-close">
            <a href="../index.php"><i class="fas fa-times"></i></a>
        </span>

        <!----------- Register Form Start -------->

        <div class="form-box register">
            <h2>Registration</h2>

            <form action="registerdb.php" method="POST">
                <div class="input-box">                   
                    <span class="icon">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>

                <div class="input-box">                    
                    <span class="icon">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox">I am agree to the terms & conditions</label>
                </div>

                <button type="submit" name="submit" class="btn-submit">Register</button>

                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
                </div>
            </form>

        </div>

    </div>

    <!-------- Link JavaScript ------>

    <script src="register.js"></script>
</body>
</html>
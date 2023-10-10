<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Shop - Login</title>

    <!---------- Favicon -------->
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

    <!--------- Font Awesome ------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <!------- Link CSS -------->
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="login.css">
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
                <a href="index.php"><button class="btn">Search</button></a>
            </div>

            <!------------ Navbar ------------->

            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="index.php">Shop</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact</a></li>
                <li id="lg-bag"><a href="index.php"><i class="fas fa-shopping-cart cart"></i></a></li>
                <a href="../index.php" id="close"><i class="fas fa-times"></i></a>

                <a href="Login/login.php"><button class="btn-login">Login</button></a>
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

        <!----------- Login Form -------->

        <div class="form-box login">
            <h2>Login</h2>

            <!----------- Form Start -------->

            <form action="logindb.php" method="POST">
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
                    <label><input type="checkbox">Remember me</label>
                    <!-- <a href="#">Forget Password?</a> -->
                </div>

                <button type="submit" name="submit" class="btn-submit">Login</button>

                <div class="login-register">
                    <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>

        </div>

        <!----------- Login Form End -------->

    </div>

    <!-------- Link JavaScript ------>

    <script src="login.js"></script>
</body>
</html>
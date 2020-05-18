<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    
    <div id="top">   <!-- Top Begin -->

        <div class="container"> <!-- Container Begin -->

            <div class="row"> <!-- Row Begin -->

                <div class="col-md-6 offer"> <!-- col-md-6 offer Begin -->

                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="#">4 Item in your Cart | Total Price: $300</a>

                </div> <!-- col-md-6 offer Begin -->

                <div class="col-md-6"> <!-- col-md-6 Begin -->

                    <ul class="menu"> <!-- menu Begin -->

                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>

                    </ul> <!-- menu Begin -->

                </div> <!-- col-md-6 End -->

            </div> <!-- Row End -->

        </div> <!-- Container End -->

    </div>  <!-- Top End --> 

    <div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default Begin-->

        <div class="container"> <!-- Container Begin-->
            
            <div class="navbar-header"> <!-- navbar-header Begin-->

                <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home Begin-->
                    <img style="width:50px; height=49px;" src="images/shopping-online.jpg" alt="Store logo" class="hidden-xs rounded-circle">
                    <img style="width:53px; height=33px;" src="images/logo.jpg" alt="Store logo" class="visible-xs rounded-circle ">
                </a> <!-- navbar-brand home Top-->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>

            </div> <!-- navbar-header End-->
            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">

                    <ul class="nav navbar-nav left">
                  
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    
                    </ul>
                </div> 
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in Your Cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>   
        </div> <!-- Container End -->
    </div> <!-- navbar navbar-default End-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
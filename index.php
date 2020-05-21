<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style>
    #slider{
        margin-bottom: 40px;
    }
/*  advantage Styles */
    #advantages{
        text-align: center;
    }
    .box{
        background: #ffffff;
        margin: 0 0 30px;
        border: solid 1px #e6e6e6;
        box-sizing: border-box;
        padding: 20px;
        box-shadow: 0px 2px 5px rgb(0, 0, 0, .3);
    }
</style>
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

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <!-- navbar-toggle Begin-->
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button> <!-- navbar-toggle End-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> <!-- navbar-toggle Begin-->
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button> <!-- navbar-toggle End-->

            </div> <!-- navbar-header End-->
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Begin-->

                <div class="padding-nav"> <!-- Padding-nav Begin-->

                    <ul class="nav navbar-nav left"> <!-- nav navbar-nav left Begin-->
                  
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
                    
                    </ul> <!-- nav navbar-nav left End-->
                </div> 
                <a href="cart.php" class="btn navbar-btn btn-primary right" style="float:right;"> <!-- btn navbar-btn btn-primary right Begin-->

                    <i class="fa fa-shopping-cart"></i>

                    <span>4 Items in Your Cart</span>

                </a> <!-- btn navbar-btn btn-primary right End-->

                <div class="navbar-collapse collapse right" style="float:right;"> <!-- navbar-collapse collapse right Begin-->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button>

                </div>  <!-- navbar-collapse collapse right End-->

                <div class="collapse clearfix" id="search">  <!-- collapse clearfix Begin-->

                    <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form Begin-->

                        <div class="input-group">  <!-- input-group" Begin-->
                            <span class="input-group-btn">
                            <input type="text" class="form-control" name="user_query" placeholder="Search" required>

                            <button type="submit" name="search" value="search" class="btn btn-primary"> <!-- btn btn-primary Begin-->

                                <i class="fa fa-search"></i>
                            
                            </button> <!-- btn btn-primary Begin-->
                            </span>

                        </div>  <!-- input-group End-->

                    </form>  <!-- navbar-form End-->
                
                </div>  <!-- collapse clearfix End-->

            </div>   <!-- navbar-collapse collapse End-->

        </div> <!-- Container End -->

    </div> <!-- navbar navbar-default End-->
    <div class="container" id="slider">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin_area/slides_images/slide1.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="admin_area/slides_images/slide2.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="admin_area/slides_images/slide4.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    <div id="advantages"> <!-- advantage begin -->
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">Best Offer</a></h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas nulla a, odit impedit,</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">Best Price</a></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem quibusdam aliquam tempora</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">100% Original Product</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis molestiae, ipsam nam aut.</p>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- advantage End -->

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>
                        Our Latest Product
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div><div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div><div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                M-Dev Logo Rubix-Cube
                            </a>
                        </h3>
                        <p class="price">$30</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
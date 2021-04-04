<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/product.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <?php include './includes/header.php' ?>

        <!-- Search Panel -->
        <div class="search_panel trans_300">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                            <form action="#">
                                <input type="text" class="search_input" placeholder="Search" required="required">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="header_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        </header>

        <!-- Menu -->

        <div class="menu menu_mm trans_300">
            <div class="menu_container menu_mm">
                <div class="page_menu_content">

                    <div class="page_menu_search menu_mm">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input menu_mm"
                                placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav menu_mm">
                        <li class="page_menu_item has-children menu_mm">
                            <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection menu_mm">
                                <li class="page_menu_item menu_mm"><a href="categories.html">Categories<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="product.html">Product<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="cart.html">Cart<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i
                                            class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item has-children menu_mm">
                            <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
                            <ul class="page_menu_selection menu_mm">
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i
                                            class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item menu_mm"><a href="categories.html">Category<i
                                            class="fa fa-angle-down"></i></a></li>
                            </ul>
                        </li>
                        <li class="page_menu_item menu_mm"><a href="index.html">Accessories<i
                                    class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i
                                    class="fa fa-angle-down"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

            <div class="menu_social">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">Smart Phones<span>.</span></div>
                                    <div class="home_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies
                                            metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details -->

        <?php include './includes/product-detail.php' ?>

        <!-- Products -->

        <?php include './includes/related-product.php' ?>

        <!-- Newsletter -->

        <?php include './includes/newsletter.php' ?>


        <!-- Footer -->
        <?php include './includes/footer.php' ?>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/product.js"></script>
</body>

</html>
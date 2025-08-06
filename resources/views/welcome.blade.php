<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Medica - Health And Medical eCommerce HTML5 Template</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">



    @vite([
        'resources/css/app.css',
        'resources/js/jquery.js',
        'resources/js/app.js',
    ])

</head>

<body class="home-3">

<!-- preloader -->

<!-- preloader end -->


<!-- header area -->
<header class="header">

    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                        <div class="header-top-left">
                            <ul class="header-top-list">
                                <li><a href="mailto:info@example.com"><i class="far fa-envelopes"></i>
                                        info@example.com</a></li>
                                <li><a href="tel:+21236547898"><i class="far fa-headset"></i> +2 123 654 7898</a></li>
                                <li class="help"><a href="#"><i class="far fa-comment-question"></i> Need Help?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                        <div class="header-top-right">
                            <ul class="header-top-list">
                                <li><a href="#"><i class="far fa-timer"></i> Daily Deal</a></li>
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="far fa-usd"></i> USD
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">USD</a>
                                            <a class="dropdown-item" href="#">EUR</a>
                                            <a class="dropdown-item" href="#">AUD</a>
                                            <a class="dropdown-item" href="#">CUD</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="far fa-globe-americas"></i> EN
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">EN</a>
                                            <a class="dropdown-item" href="#">FR</a>
                                            <a class="dropdown-item" href="#">DE</a>
                                            <a class="dropdown-item" href="#">RU</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="social">
                                    <div class="header-top-social">
                                        <span>Follow Us: </span>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- header middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-lg-3 col-xl-3">
                    <div class="header-middle-logo">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6 col-xl-5">
                    <div class="header-middle-search">
                        <form action="#">
                            <div class="search-content">
                                <select class="select">
                                    <option value="">All Category</option>
                                    <option value="1">Medicine</option>
                                    <option value="2">Medical Equipments</option>
                                    <option value="3">Beauty Care</option>
                                    <option value="4">Baby & Mom Care</option>
                                    <option value="5">Healthcare</option>
                                    <option value="6">Food & Nutrition</option>
                                    <option value="7">Medical Supplies</option>
                                    <option value="8">Lab Test</option>
                                    <option value="9">Fitness</option>
                                    <option value="10">Vitamins & Supplement</option>
                                    <option value="11">Pet Care</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Search Here...">
                                <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-7 col-lg-3 col-xl-4">
                    <div class="header-middle-right">
                        <ul class="header-middle-list">
                            <li>
                                <a href="#" class="list-item">
                                    <div class="list-item-icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                    <div class="list-item-info">
                                        <h6>Sign In</h6>
                                        <h5>Account</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="list-item">
                                    <div class="list-item-icon">
                                        <i class="far fa-heart"></i><span>0</span>
                                    </div>
                                    <div class="list-item-info">
                                        <h6>Wishlist</h6>
                                        <h5>My Items</h5>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-cart">
                                <a href="#" class="shop-cart list-item">
                                    <div class="list-item-icon">
                                        <i class="far fa-shopping-bag"></i><span>5</span>
                                    </div>
                                    <div class="list-item-info">
                                        <h6>$350.00</h6>
                                        <h5>My Cart</h5>
                                    </div>
                                </a>
                                <div class="dropdown-cart-menu">
                                    <div class="dropdown-cart-header">
                                        <span>03 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="dropdown-cart-list">
                                        <li>
                                            <div class="dropdown-cart-item">
                                                <div class="cart-img">
                                                    <a href="#"><img src="assets/img/product/01.png" alt="#"></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="#">Surgical Face Mask</a></h4>
                                                    <p class="cart-qty">1x - <span
                                                            class="cart-amount">$200.00</span></p>
                                                </div>
                                                <a href="#" class="cart-remove" title="Remove this item"><i
                                                        class="far fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-cart-item">
                                                <div class="cart-img">
                                                    <a href="#"><img src="assets/img/product/02.png" alt="#"></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="#">Surgical Face Mask</a></h4>
                                                    <p class="cart-qty">1x - <span
                                                            class="cart-amount">$120.00</span></p>
                                                </div>
                                                <a href="#" class="cart-remove" title="Remove this item"><i
                                                        class="far fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-cart-item">
                                                <div class="cart-img">
                                                    <a href="#"><img src="assets/img/product/03.png" alt="#"></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="#">Surgical Face Mask</a></h4>
                                                    <p class="cart-qty">1x - <span
                                                            class="cart-amount">$330.00</span></p>
                                                </div>
                                                <a href="#" class="cart-remove" title="Remove this item"><i
                                                        class="far fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-cart-bottom">
                                        <div class="dropdown-cart-total">
                                            <span>Total</span>
                                            <span class="total-amount">$650.00</span>
                                        </div>
                                        <a href="#" class="theme-btn">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header middle end -->

    <!-- navbar -->
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo/logo.png" class="logo-scrolled" alt="logo">
                </a>
                <div class="category-all">
                    <button class="category-btn" type="button">
                        <i class="fas fa-list-ul"></i><span>All Categories</span>
                    </button>
                    <ul class="main-category">
                        <li>
                            <a href="#">
                                <img src="assets/img/icon/medicine.svg" alt="">
                                <span>Medicine</span><i class="far fa-angle-right"></i>
                            </a>
                            <div class="sub-category-mega">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="category-single">
                                            <h6 class="category-title-text">Medicine</h6>
                                            <div class="category-link">
                                                <a href="#">Allergies & Sinus</a>
                                                <a href="#">E.N.T Preparations</a>
                                                <a href="#">Eye Preparations</a>
                                                <a href="#">Vitamin & Nutritional</a>
                                                <a href="#">Fever & Pain Relief</a>
                                                <a href="#">Dermatological</a>
                                                <a href="#">Bone Formation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="category-single">
                                            <h6 class="category-title-text">Medicine</h6>
                                            <div class="category-link">
                                                <a href="#">Allergies & Sinus</a>
                                                <a href="#">E.N.T Preparations</a>
                                                <a href="#">Eye Preparations</a>
                                                <a href="#">Vitamin & Nutritional</a>
                                                <a href="#">Fever & Pain Relief</a>
                                                <a href="#">Dermatological</a>
                                                <a href="#">Bone Formation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="category-single">
                                            <h6 class="category-title-text">Medicine</h6>
                                            <div class="category-link">
                                                <a href="#">Allergies & Sinus</a>
                                                <a href="#">E.N.T Preparations</a>
                                                <a href="#">Eye Preparations</a>
                                                <a href="#">Vitamin & Nutritional</a>
                                                <a href="#">Fever & Pain Relief</a>
                                                <a href="#">Dermatological</a>
                                                <a href="#">Bone Formation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="category-img">
                                            <a href="#"><img src="assets/img/banner/category-banner.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><img src="assets/img/icon/health-care.svg" alt=""><span>Healthcare</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/beauty-care.svg" alt=""><span>Beauty Care</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/sexual.svg" alt=""><span>Sexual Wellness</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/fitness.svg" alt=""><span>Fitness</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/lab-test.svg" alt=""><span>Lab Test</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/baby-mom-care.svg" alt=""><span>Baby & Mom Care</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/supplements.svg" alt=""><span>Vitamins & Supplement</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/food-nutrition.svg" alt=""><span>Food & Nutrition</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/medical-equipements.svg" alt=""><span>Medical Equipments</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/medical-supplies.svg" alt=""><span>Medical Supplies</span></a></li>
                        <li><a href="#"><img src="assets/img/icon/pet-care.svg" alt=""><span>Pet Care</span></a></li>
                    </ul>
                </div>
                <div class="mobile-menu-right">
                    <div class="mobile-menu-btn">
                        <a href="#" class="nav-right-link search-box-outer"><i class="far fa-search"></i></a>
                        <a href="wishlist.html" class="nav-right-link"><i
                                class="far fa-heart"></i><span>2</span></a>
                        <a href="shop-cart.html" class="nav-right-link"><i
                                class="far fa-shopping-bag"></i><span>5</span></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                     aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="index.html" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="assets/img/logo/logo.png" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#"
                                   data-bs-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="index.html">Home Demo 01</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Home Demo 02</a></li>
                                    <li><a class="dropdown-item" href="index-3.html">Home Demo 03</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-item" href="brand.html">Brands</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Category</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="category.html">Category One</a></li>
                                            <li><a class="dropdown-item" href="category-2.html">Category Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                                            <li><a class="dropdown-item" href="forgot-password.html">Forgot
                                                    Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Extra Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li><a class="dropdown-item" href="return.html">Return Policy</a></li>
                                            <li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>
                                            <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                                            <li><a class="dropdown-item" href="mail-success.html">Mail Success</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                                    <li><a class="dropdown-item" href="affiliate.html">Affiliate</a></li>
                                    <li><a class="dropdown-item" href="gallery.html">Our Gallery</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="help.html">Help</a></li>
                                    <li><a class="dropdown-item" href="invoice.html">Invoices</a></li>
                                    <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                    <li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="user-dashboard.html">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="user-profile.html">My Profile</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Orders</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="order-list.html">Orders List</a></li>
                                            <li><a class="dropdown-item" href="order-detail.html">Order Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="wishlist.html">My Wishlist</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Address</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="address-list.html">Address List</a>
                                            </li>
                                            <li><a class="dropdown-item" href="add-address.html">Add Address</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Support Tickets</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="support-ticket.html">Support
                                                    Tickets</a></li>
                                            <li><a class="dropdown-item" href="ticket-detail.html">Ticket
                                                    Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="track-order.html">Track My Order</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Payment Methods</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="payment-method.html">Payment
                                                    Methods</a></li>
                                            <li><a class="dropdown-item" href="add-payment.html">Add Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="user-notification.html">Notification</a></li>
                                    <li><a class="dropdown-item" href="user-message.html">Messages</a></li>
                                    <li><a class="dropdown-item" href="user-setting.html">Settings</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Menu</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid px-lg-0">
                                            <div class="row">
                                                <div class="col-12 col-lg-2">
                                                    <h5 class="mega-menu-title">Medicine</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Allergies & Sinus</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">E.N.T Preparations</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Eye Preparations</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Vitamin & Nutritional</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Fever & Pain Relief</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Dermatological</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <h5 class="mega-menu-title">Equipment</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Biopsy Tools</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Monitoring</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">Infusion Stands</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">Lighting</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Machines</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">Thermometer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <h5 class="mega-menu-title">Wound Care</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Surgical Sutures</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">Bandages</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Patches and Tapes</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Stomatology</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Wound Healing</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Uniforms</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-2">
                                                    <h5 class="mega-menu-title">Higiene</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Face Masks</a></li>
                                                        <li><a class="dropdown-item" href="shop-grid.html">Sterilization</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Surgical Foils</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Disposable Products</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Protective Covers</a></li>
                                                        <li><a class="dropdown-item"
                                                               href="shop-grid.html">Diagnostic Tests</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="mega-menu-img">
                                                        <a href="#"><img
                                                                src="assets/img/banner/mega-menu-banner.jpg"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                                <ul class="dropdown-menu fade-down">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Shop Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-grid.html">Shop Grid One</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-grid-2.html">Shop Grid Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Shop List</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="shop-list.html">Shop List One</a>
                                            </li>
                                            <li><a class="dropdown-item" href="shop-list-2.html">Shop List Two</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="shop-search.html">Shop Search</a></li>
                                    <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                                    <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="shop-checkout-complete.html">Checkout
                                            Complete</a></li>
                                    <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                                    <li><a class="dropdown-item" href="shop-compare.html">Shop Compare</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                    <li><a class="dropdown-item" href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="blog-single-sidebar.html">Blog Single
                                            Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <!-- nav-right -->
                        <div class="nav-right">
                            <a class="nav-right-link" href="#"><i class="fal fa-star"></i> Recently Viewed</a>
                            <a class="nav-right-link" href="track-order.html"><i class="fal fa-truck-fast"></i> Track My Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

</header>
<!-- header area end -->


<!-- mobile popup search -->
<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required>
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>
<!-- mobile popup search end -->


<main class="main">

    <!-- hero slider -->
    <div class="hero-section hs-2">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single">
                <div class="hero-single-bg" style="background-image: url(assets/img/hero/slider-1.jpg)"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Easy Health Care</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Medicine & <span>Health Care</span> For Your Family in city
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages orem psum available but the majority
                                    have suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="shop-grid.html" class="theme-btn">Shop Now<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="about.html" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="hero-single-bg" style="background-image: url(assets/img/hero/slider-2.jpg)"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Easy Health Care</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Medicine & <span>Health Care</span> For Your Family in city
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages orem psum available but the majority
                                    have suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="shop-grid.html" class="theme-btn">Shop Now<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="about.html" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single">
                <div class="hero-single-bg" style="background-image: url(assets/img/hero/slider-3.jpg)"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Easy Health Care</h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Medicine & <span>Health Care</span> For Your Family in city
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    There are many variations of passages orem psum available but the majority
                                    have suffered alteration in some form by injected humour.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="shop-grid.html" class="theme-btn">Shop Now<i
                                            class="fas fa-arrow-right"></i></a>
                                    <a href="about.html" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->


    <!-- category area -->
    <div class="category-area2 pt-80 pb-100">
        <div class="container">
            <div class="category-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/medicine.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Medicine</h4>
                                <p>30 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/health-care.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Healthcare</h4>
                                <p>25 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/beauty-care.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Beauty Care</h4>
                                <p>15 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/sexual.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Sexual Wellness</h4>
                                <p>05 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/fitness.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Fitness</h4>
                                <p>30 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/lab-test.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Lab Test</h4>
                                <p>12 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/baby-mom-care.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Baby & Mom Care</h4>
                                <p>08 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/supplements.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Supplement</h4>
                                <p>14 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/food-nutrition.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Food & Nutrition</h4>
                                <p>19 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/medical-equipements.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Equipments</h4>
                                <p>24 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/medical-supplies.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Medical Supplies</h4>
                                <p>09 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="category-item">
                    <a href="#">
                        <div class="category-info">
                            <div class="icon">
                                <img src="assets/img/icon/pet-care.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Pet Care</h4>
                                <p>16 Items</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- category area end-->


    <!-- small banner -->
    <div class="small-banner pb-100">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="banner-item">
                        <img src="assets/img/banner/mini-banner-1.jpg" alt="">
                        <div class="banner-content">
                            <p>Sanitizer</p>
                            <h3>Hand Sanitizer <br> Collectons</h3>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="banner-item">
                        <img src="assets/img/banner/mini-banner-2.jpg" alt="">
                        <div class="banner-content">
                            <p>Hot Sale</p>
                            <h3>Face Wash Sale <br> Collections</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="banner-item">
                        <img src="assets/img/banner/mini-banner-3.jpg" alt="">
                        <div class="banner-content">
                            <p>Facial Mask</p>
                            <h3>Facial Mask Sale <br> Up To <span>50%</span> Off</h3>
                            <a href="#">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- small banner end -->


    <!-- feature area -->
    <div class="feature-area pb-100">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="feature-wrap">
                <div class="row g-0">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Free Delivery</h4>
                                <p>Orders Over $120</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-sync"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Get Refund</h4>
                                <p>Within 30 Days Returns</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-wallet"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Safe Payment</h4>
                                <p>100% Secure Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fal fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4>24/7 Support</h4>
                                <p>Feel Free To Call Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->


    <!-- popular item -->
    <div class="product-area pb-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="product-banner wow fadeInRight" data-wow-delay=".25s">
                        <a href="#">
                            <img src="assets/img/banner/product-banner.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                            <div class="site-heading-inline">
                                <h2 class="site-title">Popular Items</h2>
                                <a href="#">All Products <i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="item-tab">
                                <ul class="nav nav-pills mt-40 mb-20" id="item-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="item-tab1" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab1" type="button" role="tab"
                                                aria-controls="pill-item-tab1" aria-selected="true">Medicine</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="item-tab2" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab2" type="button" role="tab"
                                                aria-controls="pill-item-tab2" aria-selected="false">Beauty Care</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="item-tab3" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab3" type="button" role="tab"
                                                aria-controls="pill-item-tab3" aria-selected="false">Healthcare</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="item-tab4" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab4" type="button" role="tab"
                                                aria-controls="pill-item-tab4" aria-selected="false">Baby & Mom Care</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="item-tab5" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab5" type="button" role="tab"
                                                aria-controls="pill-item-tab5" aria-selected="false">Food & Nutrition</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="item-tab6" data-bs-toggle="pill"
                                                data-bs-target="#pill-item-tab6" type="button" role="tab"
                                                aria-controls="pill-item-tab6" aria-selected="false">Medical Equipments</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                        <div class="tab-pane show active" id="pill-item-tab1" role="tabpanel" aria-labelledby="item-tab1"
                             tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/14.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/07.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/24.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/15.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-item-tab2" role="tabpanel" aria-labelledby="item-tab2" tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/10.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/11.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/12.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/13.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-item-tab3" role="tabpanel" aria-labelledby="item-tab3" tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/17.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/18.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/19.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/20.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-item-tab4" role="tabpanel" aria-labelledby="item-tab4" tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/22.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/23.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/24.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/25.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-item-tab5" role="tabpanel" aria-labelledby="item-tab5" tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/30.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/31.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/32.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/33.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-item-tab6" role="tabpanel" aria-labelledby="item-tab6" tabindex="0">
                            <div class="row g-3 item-3">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type new">New</span>
                                            <a href="shop-single.html"><img src="assets/img/product/34.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type hot">Hot</span>
                                            <a href="shop-single.html"><img src="assets/img/product/35.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type oos">Out Of Stock</span>
                                            <a href="shop-single.html"><img src="assets/img/product/36.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <span>$250.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <span class="type discount">10% Off</span>
                                            <a href="shop-single.html"><img src="assets/img/product/37.png" alt=""></a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                                       data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Quick View"><i class="far fa-eye"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                    <a href="#" data-bs-placement="top" data-tooltip="tooltip"
                                                       title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                                            <div class="product-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="product-bottom">
                                                <div class="product-price">
                                                    <del>$250.00</del>
                                                    <span>$190.00</span>
                                                </div>
                                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                                        data-tooltip="tooltip" title="Add To Cart">
                                                    <i class="far fa-shopping-bag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular item end -->


    <!-- trending item -->
    <div class="product-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading-inline">
                        <h2 class="site-title">Trending Items</h2>
                        <a href="#">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-wrap item-3 wow fadeInUp" data-wow-delay=".25s">
                <div class="product-slider owl-carousel owl-theme">
                    <div class="product-item">
                        <div class="product-img">
                            <span class="type new">New</span>
                            <a href="shop-single.html"><img src="assets/img/product/01.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <span>$250.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <span class="type hot">Hot</span>
                            <a href="shop-single.html"><img src="assets/img/product/02.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <span>$250.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <span class="type oos">Out Of Stock</span>
                            <a href="shop-single.html"><img src="assets/img/product/03.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <span>$250.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <span class="type discount">10% Off</span>
                            <a href="shop-single.html"><img src="assets/img/product/04.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <del>$250.00</del>
                                    <span>$190.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="shop-single.html"><img src="assets/img/product/05.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <span>$250.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="shop-single.html"><img src="assets/img/product/06.png" alt=""></a>
                            <div class="product-action-wrap">
                                <div class="product-action">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                       data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" title="Add To Compare"><i
                                            class="far fa-arrows-repeat"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="shop-single.html">Surgical Face Mask</a></h3>
                            <div class="product-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="product-bottom">
                                <div class="product-price">
                                    <span>$250.00</span>
                                </div>
                                <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                    <i class="far fa-shopping-bag"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trending item end -->


    <!-- big banner -->
    <div class="big-banner">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="banner-wrap" style="background-image: url(assets/img/banner/big-banner.jpg);">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="banner-content">
                            <div class="banner-info">
                                <h6>Mega Collections</h6>
                                <h2>Huge Sale Up To <span>40%</span> Off</h2>
                                <p>at our outlet stores</p>
                            </div>
                            <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big banner end -->


    <!-- brand area -->
    <div class="brand-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-heading-inline">
                        <h2 class="site-title">Popular Brands</h2>
                        <a href="#">All Brands <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/01.png" alt="">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/02.png" alt="">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/03.png" alt="">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/04.png" alt="">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/05.png" alt="">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/brand/06.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->


    <!-- product list -->
    <div class="product-list py-100">
        <div class="container wow fadeInUp" data-wow-delay=".25s">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="product-list-box">
                        <h2 class="product-list-title">On sale</h2>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/01.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/02.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/03.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="product-list-box">
                        <h2 class="product-list-title">Best Seller</h2>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/04.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/05.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/06.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="product-list-box">
                        <h2 class="product-list-title">Top Rated</h2>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/07.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/08.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                        <div class="product-list-item">
                            <div class="product-list-img">
                                <a href="shop-single.html"><img src="assets/img/product/09.png" alt="#"></a>
                            </div>
                            <div class="product-list-content">
                                <h4><a href="shop-single.html">Surgical Face Mask</a></h4>
                                <div class="product-list-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-list-price">
                                    <del>60.00</del><span>$40.00</span>
                                </div>
                            </div>
                            <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                               title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product list end -->


    <!-- deal area -->
    <div class="deal-area pt-50 pb-50">
        <div class="deal-text-shape">Deal</div>
        <div class="container">
            <div class="deal-wrap wow fadeInUp" data-wow-delay=".25s">
                <div class="deal-slider owl-carousel owl-theme">
                    <div class="deal-item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="deal-content">
                                    <div class="deal-info">
                                        <span>Weekly Deal</span>
                                        <h1>Best Deal For This Week</h1>
                                        <p>There are many variations of passages available but the majority have
                                            suffered alteration in some form
                                            by injected humour, or randomised words which don't look even slightly
                                            believable.</p>
                                    </div>
                                    <div class="deal-countdown">
                                        <div class="countdown" data-countdown="2027/12/30"></div>
                                    </div>
                                    <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="deal-img">
                                    <img src="assets/img/deal/01.png" alt="">
                                    <div class="deal-discount">
                                        <span>35%</span>
                                        <span>off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deal-item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="deal-content">
                                    <div class="deal-info">
                                        <span>Weekly Deal</span>
                                        <h1>Best Deal For This Week</h1>
                                        <p>There are many variations of passages available but the majority have
                                            suffered alteration in some form
                                            by injected humour, or randomised words which don't look even slightly
                                            believable.</p>
                                    </div>
                                    <div class="deal-countdown">
                                        <div class="countdown" data-countdown="2025/12/30"></div>
                                    </div>
                                    <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="deal-img">
                                    <img src="assets/img/deal/02.png" alt="">
                                    <div class="deal-discount">
                                        <span>35%</span>
                                        <span>off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deal-item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="deal-content">
                                    <div class="deal-info">
                                        <span>Weekly Deal</span>
                                        <h1>Best Deal For This Week</h1>
                                        <p>There are many variations of passages available but the majority have
                                            suffered alteration in some form
                                            by injected humour, or randomised words which don't look even slightly
                                            believable.</p>
                                    </div>
                                    <div class="deal-countdown">
                                        <div class="countdown" data-countdown="2025/12/30"></div>
                                    </div>
                                    <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="deal-img">
                                    <img src="assets/img/deal/03.png" alt="">
                                    <div class="deal-discount">
                                        <span>35%</span>
                                        <span>off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- deal area end -->


    <!-- gallery-area -->
    <div class="gallery-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Gallery</span>
                        <h2 class="site-title">Let's Check Our Photo <span>Gallery</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 popup-gallery">
                <div class="col-md-12 col-lg-6">
                    <div class="gallery-item gallery-btn-active wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/01.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/01.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/02.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/02.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/03.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/03.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/04.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/04.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="gallery-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/05.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/05.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-6">
                    <div class="gallery-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/06.jpg" alt="">
                            <a class="popup-img gallery-link" href="assets/img/gallery/06.jpg"><i
                                    class="fal fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->


    <!-- testimonial area -->
    <div class="testimonial-area ts-bg py-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Testimonials</span>
                        <h2 class="site-title text-white">What Our Client Say's <span>About Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/01.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Sylvia H Green</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/02.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Gordo Novak</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/03.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Reid E Butt</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Parker Jimenez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-author">
                        <div class="testimonial-author-img">
                            <img src="assets/img/testimonial/05.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Heruli Nez</h4>
                            <p>Customer</p>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            There are many variations of long passages available but the content majority have
                            suffered to the editor page when looking at its layout alteration in some injected.
                        </p>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->


    <!-- blog area -->
    <div class="blog-area py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Our Blog</span>
                        <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/01.jpg" alt="Thumb">
                            <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 12, 2025</span>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2.5k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">There are many variations of passage available majority suffered.</a>
                            </h4>
                            <p>There are many variations available the majority have suffered alteration randomised
                                words.</p>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInDown" data-wow-delay=".25s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/02.jpg" alt="Thumb">
                            <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 15, 2025</span>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 3.1k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">Contrary to popular belief making simply random text latin.</a>
                            </h4>
                            <p>There are many variations available the majority have suffered alteration randomised
                                words.</p>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/03.jpg" alt="Thumb">
                            <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 18, 2025</span>
                        </div>
                        <div class="blog-item-info">
                            <div class="blog-item-meta">
                                <ul>
                                    <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 1.6k Comments</a></li>
                                </ul>
                            </div>
                            <h4 class="blog-title">
                                <a href="#"> If you are going use passage you need sure there middle
                                    text.</a>
                            </h4>
                            <p>There are many variations available the majority have suffered alteration randomised
                                words.</p>
                            <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

</main>


<!-- footer area -->
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-40">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box about-us">
                        <a href="index.html" class="footer-logo">
                            <img src="assets/img/logo/logo-light.png" alt="">
                        </a>
                        <p class="mb-3">
                            We are many variations of the passages available but the majoro have suffered alteration
                            injected.
                        </p>
                        <ul class="footer-contact">
                            <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                            <li><i class="far fa-map-marker-alt"></i>25/B Milford Road, New York</li>
                            <li><a href="mailto:info@example.com"><i
                                        class="far fa-envelope"></i>info@example.com</a></li>
                            <li><i class="far fa-clock"></i>Mon-Fri (9.00AM - 8.00PM)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="help.html">Delivery Info</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="blog.html">Update News</a></li>
                            <li><a href="testimonial.html">Our Testimonials</a></li>
                            <li><a href="terms.html">Terms Of Service</a></li>
                            <li><a href="privacy.html">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Browse Category</h4>
                        <ul class="footer-list">
                            <li><a href="shop-grid.html">Medicine</a></li>
                            <li><a href="shop-grid.html">Medical Equipments</a></li>
                            <li><a href="shop-grid.html">Beauty Care</a></li>
                            <li><a href="shop-grid.html">Baby & Mom Care</a></li>
                            <li><a href="shop-grid.html">Healthcare</a></li>
                            <li><a href="shop-grid.html">Food & Nutrition</a></li>
                            <li><a href="shop-grid.html">Medical Supplies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Support Center</h4>
                        <ul class="footer-list">
                            <li><a href="faq.html">FAQ's</a></li>
                            <li><a href="help.html">How To Buy</a></li>
                            <li><a href="help.html">Support Center</a></li>
                            <li><a href="track-order.html">Track Your Order</a></li>
                            <li><a href="return.html">Returns Policy</a></li>
                            <li><a href="affiliate.html">Our Affiliates</a></li>
                            <li><a href="contact.html">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Get Mobile App</h4>
                        <p>Medica App is now available on App Store & Google Play.</p>
                        <div class="footer-download">
                            <h5>Download Our Mobile App</h5>
                            <div class="footer-download-btn">
                                <a href="#">
                                    <i class="fab fa-google-play"></i>
                                    <div class="download-btn-info">
                                        <span>Get It On</span>
                                        <h6>Google Play</h6>
                                    </div>
                                </a>
                                <a href="#">
                                    <i class="fab fa-app-store"></i>
                                    <div class="download-btn-info">
                                        <span>Get It On</span>
                                        <h6>App Store</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="footer-payment mt-20">
                            <span>We Accept:</span>
                            <img src="assets//img/payment/visa.svg" alt="">
                            <img src="assets//img/payment/mastercard.svg" alt="">
                            <img src="assets//img/payment/amex.svg" alt="">
                            <img src="assets//img/payment/discover.svg" alt="">
                            <img src="assets//img/payment/paypal.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-wrap">
                <div class="row">
                    <div class="col-12 col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="index.html"> Medica </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 align-self-center">
                        <div class="footer-social">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
<!-- scroll-top end -->


<!-- modal quick shop-->
<div class="modal quickview fade" id="quickview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="quickview" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                    class="far fa-xmark"></i></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-img">
                            <img src="assets/img/product/04.png" alt="#">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h4 class="quickview-title">Surgical Face Mask</h4>
                            <div class="quickview-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span class="rating-count"> (4 Customer Reviews)</span>
                            </div>
                            <div class="quickview-price">
                                <h5><del>$860</del><span>$740</span></h5>
                            </div>
                            <ul class="quickview-list">
                                <li>Brand:<span>Medica</span></li>
                                <li>Category:<span>Healthcare</span></li>
                                <li>Stock:<span class="stock">Available</span></li>
                                <li>Code:<span>789FGDF</span></li>
                            </ul>
                            <div class="quickview-cart">
                                <a href="#" class="theme-btn">Add to cart</a>
                            </div>
                            <div class="quickview-social">
                                <span>Share:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal quick shop end -->


<!-- modal popup banner  -->
<div class="modal popup-banner fade" id="popup-banner" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"><i class="far fa-xmark"></i></button>
            <div class="modal-body">
                <div class="popup-banner-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="popup-banner-img">
                                <img src="assets/img/banner/popup-banner.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="popup-banner-info">
                                <h6>7 Days Super Sale !</h6>
                                <h2>Hurry Up! Get Up To <span>50%</span> Discount</h2>
                                <p>There are many variations the majority have suffered alteration in some form injected words look even slightly believable.</p>
                                <a href="#" class="theme-btn">Start Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal popup banner end -->

<script src="{{ asset('js/modernizr.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>

</body>

</html>

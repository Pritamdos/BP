<?php 
	include_once "./registation-validation.php";
?>
<!doctype html>
<html lang="en" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="canonical" href="http://demo.designshopify.com/" />
    <meta name="description" content="" />
    <title>Register Page</title>

    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">

    <script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCustomersRegister notouch">
    <?php include "./header/header.php"?>

    <div id="content-wrapper-parent">
        <div id="content-wrapper">
            <!-- Content -->
            <div id="content" class="clearfix">
                <div id="breadcrumb" class="breadcrumb">
                    <div itemprop="breadcrumb" class="container">
                        <div class="row">
                            <div class="col-md-24">
                                <a href="index-2.html" class="homepage-link" title="Back to the frontpage">Home</a>
                                <span>/</span>
                                <span class="page-title">Create Account</span>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container">
                        
                        <div class="row">
                            <div id="page-header" class="col-md-24">
                                <h1 id="page-title">Register</h1>
                            </div>
                            <div id="col-main" class="col-md-24 register-page clearfix">
                                <form method="post" action="" id="create_customer" accept-charset="UTF-8">

                                    <ul id="register-form" class="row list-unstyled">
                                        <li id="first_namefs">

                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="last_namef">
                                            <label class="control-label" for="last_name">First Name</label>
                                            <input name="Fname" id="last_name" class="form-control " type="text"
                                                required />
                                        </li>
                                        <li id="last_namef">
                                            <label class="control-label" for="last_name">Last Name</label>
                                            <input name="Lname" id="last_name" class="form-control " type="text" required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="emailf" class="">
                                            <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                            <input name="Email" id="email" class="form-control " type="email"  required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="passwordf" class="">
                                            <label class="control-label" for="password"> Password <span class="req">*</span></label>
                                            <input value="" name="Password" id="password" class="form-control password"
                                                type="password"  required />
                                        </li>
                                        <li id="passwordf" class="">
                                            <label class="control-label" for="password"> Confirm Password <span class="req">*</span></label>
                                            <input value="" name="Cpassword" id="password" class="form-control password"
                                                type="password"  required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="emailf" class="">
                                            <label class="control-label" for="phonr"> Phone <span class="req">*</span></label>
                                            <input name="Phone" id="phone" class="form-control " type="number"  required />
                                        </li>

                                        <li class="clearfix"></li>
                                        <li class="unpadding-top action-last">
                                            <button class="btn" name="submitForm" type="submit">Create an Account</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div id="footer-content">
            <h6 class="general-title contact-footer-title">Newsletter</h6>
            <div id="widget-newsletter">
                <div class="container">
                    <div class="newsletter col-md-24">
                        <form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                            <span class="news-desc">We promise only send the good things</span>
                            <div class="group_input">
                                <input class="form-control" type="email" placeholder="Your Email Address" name="Email"
                                    id="email-input">
                                <div class="unpadding-top"><button class="btn btn-1" type="submit"><i class="fa fa-paper-plane"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer-content footer-content-top clearfix">
                <div class="container">
                    <div class="footer-link-list col-md-6">
                        <div class="group">
                            <h5 class="general-title">About Us</h5>
                            <ul class="list-unstyled list-styled">
                                <li class="list-unstyled">
                                    <a href="account.html">Store Locations</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Whosesalers</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Map Site</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-list col-md-6">
                        <div class="group">
                            <h5 class="general-title">Information</h5>
                            <ul class="list-unstyled list-styled">
                                <li class="list-unstyled">
                                    <a href="account.html">Help &amp; FAQs</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Advance Search</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Gift Cards</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Shop By Brands</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-list col-md-6">
                        <div class="group">
                            <h5 class="general-title">Account</h5>
                            <ul class="list-unstyled list-styled">
                                <li class="list-unstyled">
                                    <a href="account.html">Preferences</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Order History</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Cart Page</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="account.html">Sign In</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-link-list col-md-6">
                        <div class="group">
                            <h5 class="general-title">Customer</h5>
                            <ul class="list-unstyled list-styled">
                                <li class="list-unstyled">
                                    <a href="search.html">Search Advanced</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="#">Return Policy</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li class="list-unstyled">
                                    <a href="#">Help &amp; Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content footer-content-bottom clearfix">
                <div class="container">
                    <div class="copyright col-md-12">
                        © 2015 <a href="about-us.html">Jewelry - HTML template</a>. All Rights Reserved.
                    </div>
                    <div id="widget-payment" class="col-md-12">
                        <ul id="payments" class="list-inline animated">
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Visa"><a href="#" class="icons visa"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="American Express"><a href="#" class="icons amex"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Paypal"><a href="#" class="icons paypal"></a></li>
                            <li class="btooltip tada" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

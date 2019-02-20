<?php 
	include_once "./backend/login-validation.php";
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="canonical" href="http://demo.designshopify.com/" />
    <meta name="description" content="" />
    <title>Login Page</title>

    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/custom.css" rel="stylesheet" type="text/css" media="all">

    <script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCustomersRegister notouch">
    <?php include "header.php"?>
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
                                <span class="page-title">Login</span>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container">
                        <div class="row">
                            <div id="page-header" class="col-md-24">
                                <h1 id="page-title">Login</h1>
                            </div>
                            <div id="col-main" class="col-md-24 register-page clearfix">
                                <div class="row checkout-form">
                                    <div class="col-md-12 row-left">
                                        <!-- Customer Account Login -->
                                        <div id="customer-login">
                                            <div class="checkout-title">
                                                <span class="general-title">Customer Login</span>
                                            </div>
                                            <form method="post" action="" id="customer_login" >
                                                <input type="hidden" value="customer_login" name="form_type"><input
                                                    type="hidden" name="utf8" value="✓">
                                                <ul id="login-form" class="list-unstyled">
                                                    <li class="clearfix"></li>
                                                    <li id="login_email" class="col-md-21">
                                                        <label class="control-label" for="customer_email">Email Address
                                                            <span class="req">*</span></label>
                                                        <input type="email" value="" name="Email" id="customer_email"
                                                            class="form-control" required/>
                                                    </li>
                                                    <li class="clearfix"></li>
                                                    <li id="login_password" class="col-md-21">
                                                        <label class="control-label" for="customer_password">Password
                                                            <span class="req">*</span></label>
                                                        <input type="password" value="" name="Password" id="customer_password"
                                                            class="form-control password" required/>
                                                    </li>
                                                    <li class="col-md-21 unpadding-top">
                                                        <ul class="login-wrapper list-unstyled">
                                                            <li>
                                                                <button class="btn" name="submitFormlogin" type="submit">Login</button>
                                                            </li>
                                                      
                                                            <li>
                                                                <a class="return" href="register.php">New User ?</a>
                                                                <span class="create-accounts">
                                                                      CREATE AN ACCOUNT
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <!-- Password Recovery -->
                                        <div id="recover-password" style="display: none;">
                                            <div class="checkout-title">
                                                <span class="general-title">Reset Password</span>
                                                <span class="line"></span>
                                            </div>
                                            <p class="note">
                                                We will send you an email to reset your password.
                                            </p>
                                            <form method="post" action="http://demo.designshopify.com/account/recover"
                                                accept-charset="UTF-8">
                                                <input type="hidden" value="recover_customer_password" name="form_type"><input
                                                    type="hidden" name="utf8" value="✓">
                                                <ul id="recover-form" class="list-unstyled clearfix">
                                                    <li class="clearfix"></li>
                                                    <li id="recover_email" class="col-md-21">
                                                        <label class="control-label">Email Address <span class="req">*</span></label>
                                                        <input type="email" value="" name="email" id="recover-email"
                                                            class="form-control">
                                                    </li>
                                                    <li class="col-md-21 unpadding-top">
                                                        <ul class="login-wrapper list-unstyled">
                                                            <li>
                                                                <a class="action" href="javascript:;" onclick="hideRecoverPasswordForm()">Return
                                                                    to login?</a>
                                                                or <a class="return" href="index-2.html">Return to
                                                                    store</a>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-1" type="submit">Submit</button>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
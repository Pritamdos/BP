<?php 
	include_once "./backend/registation-validation.php";
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
    <?php include "header.php"?>

    <div id="content-wrapper-parent">
        <div id="content-wrapper">
            <!-- Content -->
            <div id="content" class="clearfix">
                <div id="breadcrumb" class="breadcrumb">
                    <div itemprop="breadcrumb" class="container">
                        <div class="row">
                            <div class="col-md-24">
                                <a href="index.php" class="homepage-link" title="Back to the frontpage">Home</a>
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
                                            <input name="Lname" id="last_name" class="form-control " type="text"
                                                required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="emailf" class="">
                                            <label class="control-label" for="email">Your Email <span class="req">*</span></label>
                                            <input name="Email" id="email" class="form-control " type="email" required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="passwordf" class="">
                                            <label class="control-label" for="password"> Password <span class="req">*</span></label>
                                            <input value="" name="Password" id="password" class="form-control password"
                                                type="password" required />
                                        </li>
                                        <li id="passwordf" class="">
                                            <label class="control-label" for="password"> Confirm Password <span class="req">*</span></label>
                                            <input value="" name="Cpassword" id="password" class="form-control password"
                                                type="password" required />
                                        </li>
                                        <li class="clearfix"></li>
                                        <li id="emailf" class="">
                                            <label class="control-label" for="phonr"> Phone <span class="req">*</span></label>
                                            <input name="Phone" id="phone" class="form-control " type="number" required />
                                        </li>

                                        <li class="clearfix"></li>
                                        <li class="unpadding-top action-last">
                                            <button class="btn" name="submitForm" type="submit">Create an Account</button>
                                        </li>
                                        <li class="col-md-21 unpadding-top">
                                            <ul class="login-wrapper list-unstyled">

                                                <li>
                                                      <span class="create-accounts">
                                                            Already User ?
                                                      </span>
                                                    <a class="return" href="login.php">login
                                                        
                                                    </a>

                                                </li>
                                            </ul>
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
    <?php include_once "footer.php" ?>
</body>
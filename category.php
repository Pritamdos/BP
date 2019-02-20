<?php
   include "./backend/category-validation.php"; 
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="canonical" href="http://demo.designshopify.com/" />
    <meta name="description" content="" />
    <title>Jewelry HTML Template</title>

    <link href="./../assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/custom.css" rel="stylesheet" type="text/css" media="all">
    <!-- <link href="assets/stylesheets/demo-page.css" rel="stylesheet" type="text/css" media="all"> -->
    <link href="assets/stylesheets/hover.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/stylesheets/hover-min.css" rel="stylesheet" type="text/css" media="all">

    <script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/cookies.js" type="text/javascript"></script>
    <script src="assets/javascripts/modernizr.js" type="text/javascript"></script>
    <script src="assets/javascripts/application.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
    <script src="assets/javascripts/skrollr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
    <script src="assets/javascripts/jquery.zoom.js" type="text/javascript"></script>
    <script src="assets/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body>
    <?php include "./admin-header.php" ?>
    <div class="category-outers">
        <div class="add-category">
            <ul class="category-ul">
                <li class="category-li">
                    <button type="submit" class="cat-button" name="addSubmit">
                        Category Add
                    </button>
                </li>
                <li class="category-li">
                    <button type="submit" class="cat-button views" name="viewSubmit">
                        Category View
                    </button>
                </li>
            </ul>

        </div>
    </div>
    <div class="category-add-sections">
        <div class="category-add-inners">
            <form method="post" action="">
                <div class="form-data">

                    <div class="each-rows-values">
                        <span class="labels">
                            Category Name
                        </span>
                        <input type="text" placeholder="Enter Cat Name" name="catName" required>
                    </div>
                    <div class="each-rows-values">
                        <span class="labels">
                            Category Type
                        </span>
                        <select name="selectCategory">
                            <option value="gold">Gold</option>
                            <option value="silver">Silver</option>
                        </select>
                    </div>
                    <div class="each-rows-values">
                        <span class="labels">
                            Description Category
                        </span>
                        <textarea class="catdesc" name="catDesc" placeholder="Describe About Category" required></textarea>
                    </div>
                    <div class="each-rows-values">
                        <span class="labels">
                            Category Add Date
                        </span>
                        <input type="date" name="catDate" required>
                    </div>
                    <div class="each-rows-valuess">
                        <button type="submit" class="cat-button views" name="addCategory">
                            Category Add
                        </button>
                    </div>


                </div>
            </form>

        </div>
    </div>
    <div class="category-views-sections">
        <div class="category-views-inners">

        </div>
    </div>
</body>
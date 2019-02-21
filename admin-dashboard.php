<<<<<<< HEAD
<?php 
	include_once "./backend/category-validation.php";
=======
<?php
   include "./backend/category-validation.php"; 
 
>>>>>>> 5cb4eecbff9ebc2ecac6156ff9fb69c90075cb96
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
                    <button type="submit" class="cat-button categories" name="addSubmit" id="tabs1">
                        Category Add
                    </button>
                </li>
                <li class="category-li">
                    <button type="submit"  class="cat-button views categories" name="viewSubmit" id="tabs2">
                        Category View
                    </button>
                </li>
            </ul>

        </div>
    </div>
    <div class="category-add-sections tabs" data-tab="tabs1" id="categoryfield">
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
    <div class="category-views-sections hide tabs"  data-tab="tabs2"  id="subcategoryfield">
        <div class="category-views-inners">
            <form method="post">
            <table>
                <tr class="tb-headers">
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Delete</th>
                </tr>
             <?php
                $sql = "SELECT * FROM category";
                $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) 
                 {
                ?>
                <tr>
                    <td><?php echo $row["catName"]?></td>
                    <td><?php echo $row["catType"]?></td>
                    <td><?php echo $row["catdate"]?></td>
                    <td><?php echo $row["catdesc"]?></td>
                    <td>
                        <button type="submit" name="deleteitem" class="deletedbtn" value=<?php echo $row["catId"] ?>>Delte Item</button>
                    </td>
                </tr>
                <?php
            }
        }
         else 
        {
            echo "Please add category";
        }
                        
            ?>
             </table>
             </form>
        </div>
    </div>

</body>
<script>
    $("button.categories").on('click',function(e){
        jQuery('.tabs').addClass('hide');
        jQuery(document).find("[data-tab='" + this.id + "']").removeClass("hide"); 
    });
</script>
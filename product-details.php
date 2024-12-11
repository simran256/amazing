<?php
include("conn.php");
// Get the URL alias from the GET request
$url = mysqli_real_escape_string($conn, $_GET['alias']);

// Query to get the subcategory based on the `ct_pd_url`
$query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
$header = mysqli_query($conn, $query);

if (mysqli_num_rows($header) > 0) {
    $header1 = mysqli_fetch_assoc($header);
    $subcategory_id = $header1['id']; // Get the subcategory ID
    $subcategory_name = $header1['ct_pd_name']; // Get the subcategory name
    $product_images = explode(",", $header1['cat_pd_image']); // Split image filenames
    $price = $header1['cat_pd_price'];
    $mrp =$header1['cat_pd_mrp'];
    $long_desc = $header1['long_description'];
    $short_desc = $header1['small_description'];
} 
// Fetch products under the specified subcategory using `sub_category_id`
$sub_cat_query = "SELECT * FROM `cat_prod` WHERE sub_category_id = '$subcategory_id' AND status = '1'";
$sub_cat_result = mysqli_query($conn, $sub_cat_query);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content>
      <meta name="keywords" content>
      <title> <?=$subcategory_name?> || Amazing Infotech Pvt. Ltd.</title>
      <link rel="stylesheet" href="<?=$site?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/all-fontawesome.min.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/flaticon.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/magnific-popup.min.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?=$site?>assets/css/style.css">
   </head>
   <body class="home-3">
    <?php include('header.php')?>
    
      <main class="main">
          
<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
<div class="container">
<h2 class="breadcrumb-title"><?php echo $subcategory_name; ?></h2>
<ul class="breadcrumb-menu">
<li><a href="<?=$site?>index.php">Home</a></li>
<li class="active"><?php echo $subcategory_name; ?></li>
</ul>
</div>
</div>
      <div class="service-single-area py-120">
   <div class="container">
      <div class="service-single-wrapper">
         <div class="row">
            <div class="col-xl-4 col-lg-4">
               <div class="service-sidebar">
                  <div class="widget category">
                     <h4 class="widget-title">Other Products</h4>
                     <div class="category-list">
                         <?php
                         
                         
    $sub_cat = "SELECT * FROM `cat_prod` WHERE sub_category_id != '0' AND status = '1'";
    $res2 = mysqli_query($conn, $sub_cat);

    
    while ($product_row = mysqli_fetch_assoc($res2)) {
        
        $sub_cat_pro = htmlspecialchars($product_row['ct_pd_name']); 
        $product_url = htmlspecialchars($product_row['ct_pd_url']); 
        
    ?>
                        <a href="<?= $site ?>product-details/<?= $product_url ?>"><i class="far fa-angle-double-right"></i><?= $sub_cat_pro?></a>
                        
                        <?php
    }
    ?>
                       
                     </div>
                  </div>
                  <div class="widget service-download">
                     <h4 class="widget-title">Download</h4>
                     <?php if (!empty($header1['cat_pd_pdf_image'])): ?>
                    <a href="<?=$site_root?>/uploads/product/cat_pd_pdf_image/<?=urlencode(rtrim($header1['cat_pd_pdf_image'], ','))?>" target="_blank">
                        <i class="far fa-file-pdf"></i> Download Brochure
                    </a>
                   <?php else: ?>
                    <a href="javascript:void(0)" class="disabled" style="pointer-events: none; color: gray;">
                        <i class="far fa-file-pdf"></i> No Brochure Available
                    </a>
                  <?php endif; ?>
                   
                  </div>
               </div>
            </div>
            <div class="col-xl-8 col-lg-8">
               <div class="service-details">
                  <div class="service-details-img mb-30">
                     <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= $product_images[0]; ?>" heigth="300px" alt="<?=$subcategory_name?>">
                  </div>
                  <div class="service-details">
                     <h3 class="mb-30"><?php echo $subcategory_name; ?></h3>
                     <p>
                      <?php echo $short_desc; ?> 
                     </p>
                    <h4 class="pt-2 pb-2"><b>Key Features:</b></h4>
                      <p><?php echo $long_desc; ?> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      </main>
       <?php include('footer.php')?>
   </body>
</html>
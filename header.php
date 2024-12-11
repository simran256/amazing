<?php
include("conn.php");
?>
<style>
    .nav-item{
        

    list-style: none;
    font-size: 13px;

    }
</style>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <span>Follow Us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="tel:9971314354"><i class="far fa-phone-volume"></i> +91-9971314354</a>
                                </div>
                            </li>
                            <li>
                                <div class="header-top-contact-info">
                                    <a href="mailto:support@amazinginfotech.in"><i class="far fa-envelope"></i> support@amazinginfotech.in</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.php">
                    <img src="<?=$site?>assets/img/main-logo.png" alt="Amazing Infotech Logo">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="index.php" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="assets/img/main-logo.png" alt="Amazing Infotech Logo">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?=$site?>index.php">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>about-us.php">About Us</a></li>
                           <li class="menu-icon">
                               <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">HP Products</a>
                              <ul class="dropdown-menu fade-down">
                                 <?php
                                // Fetch top-level categories (parent categories)
                                $categories_query = mysqli_query($conn, "SELECT * FROM cat_prod WHERE sub_category_id = '0' AND status = '1'");
                                
                                while ($category = mysqli_fetch_assoc($categories_query)) {
                                    $category_name = htmlspecialchars($category['ct_pd_name']);
                                    $category_url = htmlspecialchars($category['ct_pd_url']);
                                    // $id = htmlspecialchars($category['id']);

                                    ?>
                                    <li class="menu-item">
                                        <a href="<?= $site ?>products.php?category=<?= $category_url ?>" class="nav-link">
                                            <?= $category_name ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                         
                              </ul>
                           </li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>assets/img/certificate.pdf" target="_blank">HP Certificate</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>our-branches.php">Our Branches</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>careers.php">Careers</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>supplies-and-amc.php">Supplies & AMC</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>news-and-events.php">News & Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=$site?>contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

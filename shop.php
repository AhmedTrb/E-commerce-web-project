<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
        <script src="scripts.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="left">
                <div class="logo"><img src="assets/SetUpSprint.svg" alt="logo" height="30px"/></div>
                <nav>
                    <ul>
                        <li><a href="homePage.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="brandsPage.php">Brands</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <div class='icon'><a href='login.php'><img src='assets/profile.svg' height='25px'/></a></div>
                <div class="icon"><a href="cartPage.php"><img src="assets/cart.svg" height="25px"/></a></div>
            </div>
        </header>
        
        <!-- ---------------------------------------------------------------------------------------------------- -->
        <!-- SHOP -->
        <section class="container main-shop">
            <!-- Filter Products -->
            <div class="filters-card">
                <div style="display:flex;justify-content:space-between;">
                    <h2 class="fliter-text">Filters</h2>
                    <img src="assets/filter.svg">
                </div>
                <hr>
                <!-- applied filters -->
                <div class="filter-detail">
                        <label class="main">CPU
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label>
                        <label class="main">GPU
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label>
                        <label class="main">Intel
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label> 
                </div>
                <!-- brand filter -->
                <h2 class="fliter-text">Brands</h2>
                <hr>
                <div class="filter-detail">
                    <label class="main">Intel
                        <input type="checkbox">
                        <span class="checkbox-container"></span>
                    </label>
                    <label class="main">Red Dragon
                        <input type="checkbox">
                        <span class="checkbox-container"></span>
                    </label>
                    <label class="main">AMD
                        <input type="checkbox">
                        <span class="checkbox-container"></span>
                    </label>
                </div>
                <!-- category filter -->
                <h2 class="fliter-text">Categories</h2>
                <hr>
                <div class="filter-detail">
                    <form>
                        <label class="main">Mouse
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label>
                        <label class="main">CPU
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label>
                        <label class="main">GPU
                            <input type="checkbox">
                            <span class="checkbox-container"></span>
                        </label>
                    </form>
                </div>
                
                
                <hr>
                <input class="filter-btn" value="Apply filters" type="submit">

            </div>

            <!-- Shop products -->
            <div class="shop-right">
                <div class="shop-products-list">
                    <div>
                        <h2 class="medium-title">Shop</h2>
                    </div>
                    <ul>
                        <?php 
                            include_once "database.php" ;

                            $prod_per_page = 12 ;
                            if (isset($_GET["page"])) {
                                $page = $_GET['page'];
                            } else $page=1;

                            $start_from = ($page-1)*$prod_per_page ;
                            
                            $quer = "SELECT * FROM product LIMIT $start_from , $prod_per_page";
                            $stm = $connect->query($quer) ;
                            $result = $stm->fetchAll(PDO::FETCH_ASSOC);

                            foreach($result as $row) {
                                $url = $row["ImageURL"] ;
                        ?>
                        <li><a href="productDetailPage.php?ID=<?php echo"$row[ProductID]"?>" >
                            <div class="product-item">
                                <div><img src="<?php echo $url ?>" alt="product" class="prd-img"/></div>
                                <p class="pr-name"><?php echo $row["ProductName"] ?></p>
                                <img src="assets/rating.svg" alt="rating">
                                <p class="pr-price"><?php echo $row["OldPrice"] ?> DT</p>  
                            </div>
                        </a></li>

                        <?php } ?>
                    </ul>
                </div>
                <hr style="width: 90%;">

                <!-- Pages footer -->
                <div class="page-footer">
                <?php  
                        if (isset($_GET["page"])) {
                                $page = $_GET['page'];
                            } else $page=1;
                        if ($page>1) $page--;
                        echo"<a class='btn-p' href='shop.php?page=".$page."'>"; ?>
                            <div style="display:flex;justify-content:space-between;align-items:center;gap:1dvw">
                                <img src="assets/left-arrow.svg"><div>Previous</div>
                            </div>
                        </a>
                    <?php
                        

                        $prod_per_page = 12 ;
                        $sql = "SELECT COUNT(ProductID) AS total FROM product";
                        $stm = $connect->query($sql) ;
                        $row = $stm->fetch(PDO::FETCH_ASSOC);
                                
                        $total_pages = ceil($row["total"] / $prod_per_page);
                        ?>
                        <div class="pages">
                            <?php
                            if ($total_pages>15){
                                for ($i=1;$i<=$total_pages;$i++){
                                    if ($i <= 4 || (($i==$page || $i==$page-1 || $i==$page+1) && $i>4 && $i<=$total_pages-3) ||$i>= $total_pages - 3) {
                                        echo "<a href='shop.php?page=" .$i."'>";
                                        echo "<div " . (($i == $page) ? " class='curPage'" : " class='nrml-page'").">" . $i . "</div>";
                                        echo "</a> ";
                                    }
                                    else echo ".";
                                } 
                            } else {
                                for ($i=1;$i<=$total_pages;$i++){
                                    echo "<div class='page-item'>".$i."</div>" ;
                                } 
                            }
                            ?>
                        </div>
                    <?php  
                    if (isset($_GET["page"])) {
                            $page = $_GET['page'];
                        } else $page=1;
                    if ($page<$total_pages) $page++;
                    echo"<a class='btn-p' href='shop.php?page=".$page."'>"; ?>
                        <div style="display:flex;justify-content:space-between;align-items:center;gap:1dvw">
                            <div>Next</div><img src="assets/right-arrow.svg"> 
                        </div>
                         
                    </a>
                </div>
            </div>
        </section>

    <!-- Footer -->

    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <img src="assets/SetUpSprint.svg" slt="logo" />
                <p>We have clothes that suits your style<br> and which you're proud to wear.<br> From women to men.</p>
                <div class="socials"><a href="https://github.com/AhmedTrb/E-commerce-Website"><img src="assets/Social.svg" alt="socials"/></a></div>
            </div>
            <div class="footer-item">
                <p class="title">Company</p>
                <ul>
                    <li>About</li>
                    <li>Features</li>
                    <li>Works</li>
                    <li>Career</li>
                </ul>
            </div>
            <div class="footer-item">
                <p class="title">Help</p>
                <ul>
                    <li>Costumer Support</li>
                    <li>Delivery Details</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="footer-item">
                <p class="title">FAQ</p>
                <ul>
                    <li>Account</li>
                    <li>Manage Deliveries</li>
                    <li>Orders</li>
                    <li>Payments</li>
                </ul>
            </div>
        </div>
        <hr style="width: 90%;">
        <div class="flex-items">
            <p class="copyrights" >Shop.co © 2000-2023, All Rights Reserved</p>
            <div class="flex">
                <img src="assets/visa.svg" alt="visa"/>
            </div> 
        </div>
    </footer>
    <script href="script2.js"></script>
</body>
</html>
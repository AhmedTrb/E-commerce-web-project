<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/images/SetUpSprint.svg" type="image/icon type">
        <script src="../assets/js/scripts.js"></script>
    </head>
    <body>

    <?php include "../includes/header.php" ?>

        <!-- SHOP -->
        <section class="container main-shop">
            <!-- Filter Products -->
            <div class="filters-card">
                <div style="display:flex;justify-content:space-between;">
                    <h2 class="fliter-text">Filters</h2>
                    <img src="../assets/images/filter.svg">
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
                        <!-- loading products -->
                        <?php include "../loaders/shopProductLoader.php"; ?>
                    </ul>
                </div>
                <hr style="width: 90%;">

                <!-- Pages footer -->
                <div class="page-footer">
                    <!-- previous button -->
                    <?php  
                        if (isset($_GET["page"])) {
                                $page = $_GET['page'];
                        } else $page=1;
                        if ($page>1) $page--;

                        echo"<a class='btn-p' href='shopPage.php?page=".$page."'>"; ?>
                            <div style="display:flex;justify-content:space-between;align-items:center;gap:1dvw">
                                <img src="../assets/images/left-arrow.svg"><div>Previous</div>
                            </div>
                        </a>
                    <!-- displaying page items -->
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
                                        echo "<a href='shopPage.php?page=" .$i."'>";
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
                    <!-- Next button -->
                    <?php  
                    if (isset($_GET["page"])) {
                            $page = $_GET['page'];
                        } else $page=1;
                    if ($page<$total_pages) $page++;
                    echo"<a class='btn-p' href='shopPage.php?page=".$page."'>"; ?>
                        <div style="display:flex;justify-content:space-between;align-items:center;gap:1dvw">
                            <div>Next</div><img src="../assets/images/right-arrow.svg"> 
                        </div>  
                    </a>
                </div>
            </div>
        </section>

        <?php include "../includes/footer.php" ?>
</body>
</html>
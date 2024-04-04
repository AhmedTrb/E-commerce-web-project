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
                        <!-- displaying product card -->
                        <li><a href="productDetailPage.php?ID=<?php echo"$row[ProductID]"?>" >
                            <div class="product-item">
                                <div><img src="<?php echo $url ?>" alt="product" class="prd-img"/></div>
                                <p class="pr-name"><?php echo $row["ProductName"] ?></p>
                                <img src="assets/rating.svg" alt="rating">
                                <p class="pr-price"><?php echo $row["OldPrice"] ?> DT</p>  
                            </div>
                        </a></li>

                        <?php } ?>
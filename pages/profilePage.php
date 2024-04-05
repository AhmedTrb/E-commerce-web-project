<?php session_start() ;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style1.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/images/SetUpSprint.svg" type="image/icon type">
        <script src="../assets/js/scripts.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="left">
                <div class="logo"><img src="../assets/images/SetUpSprint.svg" alt="logo" height="30px"/></div>
                <nav>
                    <ul>
                        <li><a href="../homePage.php">Home</a></li>
                        <li><a href="shopPage.php">Shop</a></li>
                        <li><a href="brandsPage.php">Brands</a></li>
                    </ul>
                </nav>
            </div>
            <div class="icons">
                <div class="icon"><a href="../config/login.php"><img src="../assets/images/profile.svg" height="25px"/></a></div>
                <div class="icon"><a href="cartPage.php"><img src="../assets/images/cart.svg" height="25px"/></a></div>
                <div class='logout-btn'><a href="../config/logout.php">Logout</a></div>
            </div>
        </header>
        <!-- ---------------------------------------------------------------------------------------------------- -->


        <section class="container">
            <div class="top">
                <h1 class="cart-title" style="margin-right:35%;">Profile</h1>
                <?php
                
                echo "<h1 class='cart-title'>Welcome Back " .$_SESSION["userFname"]. "!</h1>" ;
                ?>
            </div>
            <hr>
            <div>
                <h2 class="medium-text">Personal Information</h2>
                <!-- Users's Personal information  --------------->
                <div class="personal-info">
                    <div class="info">
                        <h4>Name :</h4>
                        <h4>Email :</h4>
                        <h4>Phone Number :</h4>
                        <h4>Default Adress :</h4>
                    </div>
                    <div class="info-details">
                        <?php
                            echo "<h3>" .$_SESSION["userFname"]. "</h3>" ;
                            echo "<h3>" .$_SESSION["userLname"]. "</h3>" ;
                            echo "<h3>" .$_SESSION["phone"]. "</h3>" ;
                            echo "<h3>" .$_SESSION["address"]. "</h3>" ;
                        ?>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------------- -->
            
            <!-- Table displaying all the past purshases of the user -->
            <div class="past-purshase">
                <h2 class="medium-text">Previous Orders:</h2>
                <table width="100%">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Product</td>
                            <td>Qte</td>
                            <td>Total</td>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "../loaders/profilePastOrdersLoader.php"; ?>
                    </tbody>
                </table>
            </div>
            <!-- --------------------------------------------------------------------------------------- -->
        </section>

        <?php include "../includes/footer.php" ?>
</body>
</html>
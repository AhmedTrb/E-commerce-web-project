<?php session_start() ;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
        <script src="scripts.js"></script>
    </head>
    <body>
    <?php include "header.php" ?>

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
                        <?php include "profilePastOrdersLoader.php"; ?>
                    </tbody>
                </table>
            </div>
            <!-- --------------------------------------------------------------------------------------- -->
        </section>

        <?php include "footer.php" ?>
</body>
</html>
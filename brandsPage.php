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

        <section class="brands-list">
            <?php

            for ($i=0;$i<12;$i++) 
                echo"<div class='brand-item'>
                        <img class='brand-img' src='assets/RAM.png'>
                    </div>" ;
            ?>
        </section>

        <?php include "footer.php" ?>
        <script src="script2.js"></script>
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style1.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="icon" href="../assets/images/SetUpSprint.svg" type="image/icon type">
        <script src="assets/js/scripts.js"></script>
    </head>
    <body>
        <?php include "../includes/header.php" ?>

        <section class="brands-list">
            <?php

            for ($i=0;$i<12;$i++) 
                echo"<div class='brand-item'>
                        <img class='brand-img' src='../assets/images/RAM.png'>
                    </div>" ;
            ?>
        </section>

        <?php include "../includes/footer.php" ?>       
</body>
</html>
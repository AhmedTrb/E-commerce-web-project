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
            require_once "../includes/database.php" ;

            $query ="SELECT DISTINCT Brand FROM Product";
            $stm = $connect->prepare($query);
            $stm->execute();

            $brands = $stm->fetchAll(PDO::FETCH_ASSOC);

            foreach($brands as $brand) {
                echo"<div class='brand-item'>
                        <h1>".$brand['Brand']."</h1>
                    </div>" ;
            } 
            ?>
        </section>

        <?php include "../includes/footer.php" ?>       
</body>
</html>
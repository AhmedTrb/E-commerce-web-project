    <?php

$host = 'localhost' ;
$dbname = 'setupsprint_ecommerce_website';
$username = 'root';
$password = '';

try {
    // if mysql is running on port 3306 remove port="3307" 

    $connect = new PDO(
        "mysql:host=$host;
        port=3307; 
        dbname=$dbname",
        $username, 
        $password
    );
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


<?php 
include 'database.php' ;

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isset($_SESSION["userFname"])) {
    header('Location:signinPage.php'); 
    if (isset($_POST['email']) && isset($_POST['password'])){
    

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
    

        $query = 'SELECT * FROM clients WHERE Email=:email AND passwordHash=:password' ;
    
        $statement = $connect->prepare($query) ;
    
        $statement->execute(array('email'=>$email,'password'=>$password)) ;
    

        $count = $statement->rowCount();
    
        if ($count > 0) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            $_SESSION["userFname"] = $user['FirstName'] ;
            $_SESSION["userLname"] = $user['LastName'] ;
            $_SESSION["eimail"] = $user['Email'] ;
            $_SESSION["phone"] = $user['PhoneNumber'] ;
            $_SESSION["address"] = $user['Address'] ;
            
            header('location:profilePage.php'); 
            exit();
        } else {
            echo '<script>alert("incorrect email or password")</script>' ;
            header('location:signinPage.php');
        }
    } 
} else {
    header('location:profilePage.php'); 
    exit();
}


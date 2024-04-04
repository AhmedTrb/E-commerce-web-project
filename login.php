<?php 
include 'database.php' ;
session_start();


if (!isset($_SESSION["userFname"])) {
    header('Location:signinPage.php'); 
    if (isset($_POST['email']) && isset($_POST['password'])){
    

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = 'SELECT * FROM clients WHERE Email= ? AND PasswordHash=?' ;
    
        $statement = $connect->prepare($query) ;
        // if (!password_verify($password,$password)){
        //     echo "<script>alert('incorrect password')</script>" ;
        //     header('location:signinPage.php');
        //     exit();
        // }
        $statement->execute([$email,$password]);
    

        $count = $statement->rowCount();
    
        if ($count > 0 ) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            $_SESSION["userFname"] = $user['FirstName'] ;
            $_SESSION["userLname"] = $user['LastName'] ;
            $_SESSION["eimail"] = $user['Email'] ;
            $_SESSION["phone"] = $user['PhoneNumber'] ;
            $_SESSION["address"] = $user['Address'] ;
            $_SESSION["ClientID"] = $user['ClientID'] ;
            header('location:profilePage.php'); 
            exit();
            
        } else {
            echo "<script>alert('incorrect email or password')</script>" ;
            header('location:signinPage.php');
        }
    } 
} else {
    header('location:profilePage.php'); 
    exit();
}


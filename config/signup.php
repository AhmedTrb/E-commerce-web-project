<?php 
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirmpassword"]) && $_POST["password"]==$_POST["confirmpassword"]){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    include "../includes/database.php";

    $stmt = $connect->prepare("SELECT * FROM Clients WHERE FirstName = ? AND Email = ?");
    $stmt->execute([$username,$email]);
    $user = $stmt->fetch();

    if ($user) {
        echo "<script>alert('user already exists in database')</script>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $connect->prepare("INSERT INTO Clients (FirstName,LastName,Email,PasswordHash,Address,PhoneNumber) VALUES (?, ? , ?, ? ,? ,?)");
        $stmt->execute([$firstname, $lastname,$email,$hashed_password,"Avenue Habib Bourgiba 8050 Hammamet",$phonenumber]);
        header("Location:../pages/signinPage.php");
    }
}
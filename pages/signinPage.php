<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/style1.css">
        <link rel="icon" href="../assets/images/SetUpSprint.svg" type="image/icon type">
        
    </head>
<body>
    
    <section style="display:flex;align-items:center;">
        <div class="left-image"></div>
        <div class="login-form">
            <h1 class="big-text">Welcome Back !</h1>

            <label>Email</label>
            <form action="../config/login.php" method="POST">
                <input type="email" placeholder="email" name="email" required>
            
                <label>Password</label>
            
                <input type="password" placeholder="password" name="password" required>
            

                <p>Don't have an account yet <span><a href="SignUpPage.php">Sign up</a></span></p>
            
                <input class="log-btn" type="submit" name="login" value="Login">
            </form>
            
        </div>
    </section>
</body>
</html>
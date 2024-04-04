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
            <h1 class="big-text">Create an Account</h1>

            <form action="../config/signup.php" method="POST">
                    <div style="display:flex;justify-content:space-between;gap:1dvw">
                        <div>
                            <label>First Name</label>
                            <input type="text" placeholder="First Name" name="firstname" required>
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" placeholder="Last Name" name="lastname" required>
                        </div>  
                    </div> 
                    <div style="display:flex;justify-content:space-between;gap:1dvw">
                        <div>
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div>
                            <label>Phone Number</label>
                            <input type="tel" placeholder="phone" name="phone" required>
                        </div>  
                    </div> 
                <label>Password</label>
                <input type="password" placeholder="password" name="password"required>
                <input type="password" placeholder="Confirm password" name="confirmpassword" required>
                <p>By signing up I agree to the  <span><a href="">Terms & conditions</a></span></p>
                <input class="log-btn" type="submit" name="signup" value="Signup">
            </form>

        </div>
    </section>
</body>
</html>
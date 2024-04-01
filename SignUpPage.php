<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SetUpSprint</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">

        <link rel="icon" href="assets/SetUpSprint.svg" type="image/icon type">
        <script src="scripts.js"></script>
    </head>
<body>
    <section style="display:flex;align-items:center;">
        <div class="left-image"></div>
        <div class="login-form">
            <h1 class="big-text">Create an Account</h1>

            <label>Name</label>
            <form>
                <input type="text" placeholder="Name" required>
            </form>
            <label>Email</label>
            <form>
                <input type="email" placeholder="Email" required>
            </form>

            <label>Password</label>
            <form>
                <input type="password" placeholder="password" required>
                <input type="password" placeholder="Confirm password" required>
            </form>

            <p>By signing up I agree to the  <span><a href="">Terms & conditions</a></span></p>
            <button class="log-btn"><a href="homePage.php">Sign up</a></button>
        </div>
    </section>
</body>
</html>
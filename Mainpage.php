<html>

<head>
    <title> Hello Welcome To My Website </title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <img src="textfx.png" alt="Main Logo" id="mainlogo">

    <div class="BGimage">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login </button>
                <button type="button" class="toggle-btn" onclick="register()">Register </button>
            </div>
            <div class="social-icon">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
            </div>
            <form id="login" class="input-group" action="login.php" method="post">
                <input type="text" class="input-field" placeholder="User Id" name="username" value="" required><br><br>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" value="" required><br>
                <input type="checkbox" class="check-box" name="checkbox"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="submit">Login </button>
            </form>
            <form id="register" class="input-group" action="signup.php" method="post">
                <input type="text" class="input-field" placeholder="User Id" required name="username"><br><br>
                <input type="email" class="input-field" placeholder="Email Id" required name="emailid"><br><br>
                <input type="password" class="input-field" placeholder="Enter Password" required name="password"><br>
                <input type="checkbox" class="check-box" name="checkbox" required><span>I Agree The Term & Condition</span>
                <button type="submit" class="submit-btn" name="submit">Register</button>
            </form>

        </div>
    </div>
    <script>
        x = document.getElementById("login")
        y = document.getElementById("register")
        z = document.getElementById("btn")

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Admin Form / Please enter your user information.</span></div>
            <div class="card-body">
            <form action="adminDash" method="get">
                    <div class="form-group text-center">
                        <input type="text" class="login-input" placeholder="Username" id="username" name="username" required><br>                    </div>
                    <div class="form-group text-center">
                        <input type="password" class="login-input" placeholder="Password" id="password" name="password" required><br>                    </div>
                    <div class="form-group text-center">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login as Admin</button >
                </form>
                <p id="error-message" style="color: red;"></p>
            </div>
            </div>
        </div>
    </div>

    <!-- <script>
        function checkLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "admin" && password === "authorized_person") {
                window.location.href = "http://localhost:8080/adminDash"; // Redirect to admin dashboard
            } else {
                document.getElementById("error-message").innerText = "Invalid username or password. Please try again.";
            }
        }
    </script> -->





    
    <!-- ============================================================== -->
    <!-- end login page  -->

<!-- =================================================================-->

    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>
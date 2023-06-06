
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/06e3d45599.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginstyle.css">
    
    <title>Login</title>
</head>
<body>
    

    <div class="container">
        <img src ="1.jpg" class=loginicon>
        
        <form class="login-email" action="authentication.php" method="POST">
            
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">
                 LOGIN
            </p>
            <div class="input-group">
                 <p>&emsp;<i class="far fa-envelope"></i>&emsp;Email ID</p>
                <input type="email" placeholder="ENTER YOUR EMAIL ID" name="email" required>
            </div>
            <div class="input-group">
                <p>&emsp;<i class="fas fa-lock"></i>&emsp;Password</p>
                <input type="Password" id="pswrd" class="password"placeholder="ENTER YOUR PASSWORD" name="password" required>
                <p id="icon"><br>&emsp;<i class="far fa-eye" onclick="show()"></i>&emsp;Show Password</p>          
                 
                
            </div>

            <div class="input-group">
                    <button type="submit" name="login"class="btn">LOGIN</button>
            </div>
            <p class="Login-register-text">Don't have an Account? <a href="register.php">Register Here</a></p>
        </form>

    </div>
   

    <script>
        function show(){
            var pswrd = document.getElementById('pswrd');
            var icon = document.querySelector('.far');
            if (pswrd.type === "password"){
                pswrd.type = "text";
            }else{
                pswrd.type = "password";
                
            }
        }
    </script>
</body>
</html>


<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/06e3d45599.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginstyle.css">
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
    
    <title>Register</title>
</head>
<body>

    <div class="regcontainer">

        <img src ="1.jpg" class=loginicon>
        <form  class="login-email"action="registration.php" method="POST">

            <p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center;">
                REGISTER
            </p>
            <div class="reg-input-group">
                <p>&emsp;<i class="far fa-user"></i>&emsp;Name</p>
                <input type="text" placeholder="ENTER YOUR NAME" name="name" required>
            </div>
           
            <div class="reg-input-group">
                <p>&emsp;<i class="fas fa-sort-numeric-up-alt"></i>&emsp;Age</p>
                <input type="number" placeholder="ENTER YOUR AGE" name="Age"required>
            </div>
            <div class="reg-rinput-group">
                <p>&emsp;<i class="fas fa-venus-mars"></i>&emsp;&emsp;Gender</p>
                &emsp;&emsp;&emsp; <input type="radio" name="gender" value= "Male" >&emsp; Male &emsp;&emsp;&emsp;
                <input type="radio" name="gender" value="Female">&emsp;&emsp;Female
                
                <br><br>
            </div>
            <div class="reg-input-group">
                <p>&emsp;<i class="far fa-envelope"></i>&emsp;Email ID</p>
                <input type="email" placeholder="ENTER YOUR EMAIL ID" name="email" required>
            </div>
            
            <div class="reg-input-group">
                <p>&emsp;<i class="fas fa-unlock"></i>&emsp;Password&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="far fa-eye" onclick="show()"></i>&emsp;</p>
                <input type="password" id="pswrd" placeholder="ENTER YOUR PASSWORD" name="password"  required>
            </div>
            <div class="reg-input-group">
                <p>&emsp;<i class="fas fa-lock"></i>&emsp;Confirm Password&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fas fa-eye" onclick="showcp()"></i>&emsp;</p>
                <input type="password" id="cpswrd" placeholder="CONFIRM YOUR PASSWORD" name="cpassword" required>
               
            
                
            </div>

                
            <div class="input-group">


            <button type="submit" class="btn" name="submit">REGISTER</button>
             
            </div>
            
            <p class="Login-register-text">Already have an Account ? <a href="index.php">Login Here</a></p>
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
     <script>
        function showcp(){
            var pswrd = document.getElementById('cpswrd');
            var icon = document.querySelector('.fas');
            if (pswrd.type === "password"){
                pswrd.type = "text";
            }else{
                pswrd.type = "password";
                
            }
        }
    </script>
</body>

</html>
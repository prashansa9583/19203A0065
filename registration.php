<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "LOGIN";

$con = mysqli_connect($server, $user, $pass, $database);

if (!$con) {
    die("<script>alert('Failed to connect with MySQL.')</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['Age'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $cpassword=$_POST['cpassword'];
        
    
        $emailquery = "select * from REGISTER where EMAIL_ID ='$email' ";
            $query=mysqli_query($con,$emailquery);
            $emailcount=mysqli_num_rows($query);
    
        if($emailcount>0){
            ?>
                <script>
                  swal({
                     title: "SORRY!",
                     text: "This Email Already Exists. Please try Another one",
                     type: "warning",
                     icon: "warning",
                     button: "Okay!"
                        }).then(function() {
                    window.location = "register.php";
});

                </script>
            <?php 

        }else{
    
            if($password == $cpassword)
            {
                $sql = "INSERT INTO register (NAME, AGE,GENDER,EMAIL_ID, PASSWORD) VALUES ('$name', '$age','$gender','$email','$password')";
                $query_run = mysqli_query($con,$sql);
                if($sql)
                {   ?>
                    <script>
                   
                    swal({
                    title: "REGISTRATION SUCCESSFUL!",
                    text:"Welcome",
                    icon: "success",
                    button: "Okay! Great"
                    }).then(function() {
                    window.location = "profile.html";
                    });
                    </script>
                   
                    <?php
                }else{

            
                    ?>
                    <script>
                    swal({
                        title: "Registration Failed",
                        text: "Sorry!",
                        type: "warning",
                        icon:"warning",
                        button: "Okay!"
                    }).then(function() {
                        window.location = "redirectURL";
                    });
                        
                    </script>
                    
                    <?php
                }
            }
            else{
                ?>

                <script>
                  swal({
                        title: "OOPS!",
                        text: "Password Doesn't Match. Please try again.",
                        type: "error",
                        icon: "error",
                        button: "Okay!"
                    }).then(function() {
                        window.location = "register.php";
                    });

                </script>
                
                <?php
            }
        }
    }
    
    ?>
</body>
</html>


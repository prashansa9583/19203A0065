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

</head>
<body>
<?php
    
  
    $emailid = $_POST['email'];
    $password = $_POST['password'];

    //to prevent from mysqli injection
    $emailid = stripcslashes($emailid);
    $password = stripcslashes($password);
    $emailid = mysqli_real_escape_string($con, $emailid);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "select *from REGISTER where EMAIL_ID = '$emailid' and password = '$password'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

        if($count == 1){
            ?>
                <script>
               swal({
                    title: "LOGIN SUCCESSFUL!",
                    text:"Welcome!",
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
                    title: "LOGIN FAILED!",
                    text:"Invalid Email ID or Password. Please Try Again!",
                    icon: "error",
                    button: "Okay! "
                    }).then(function() {
                    window.location = "index.php";
                    });
                    
                </script>
                
                <?php
        
             }

    
       

?>
</body>
</html>




<!-- //  -->
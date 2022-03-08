<?php
include "db_connection.php";

$link = mysqli_connect('localhost', 'root', '', 'ews_system' );
if ($link===false){
    die("ERROR: Could not Connect. ".mysqli_connect_error());
}

//   $email = "email";
//  $psw = "psw";
// $repeat = "repeat";

                 $email = $psw = $repeat = "";
                 $email_err = $psw_err = $repeat_err = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    function test_input($data){
                        $data = stripcslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
        //Validation
                        if (empty($_POST["email"])){
                              $email_err="Enter your email";
                        }else{
                            $email=test_input($_POST["email"]);
                        }


                        if (empty($_POST["psw"])){
                            $psw_err="Enter Your Password";
                        }else{
                            $psw =test_input($_POST["psw"]);
                        }

                        if (empty($_POST["repeat"])){
                            $repeat_err="Enter Your Password";
                        }else{
                            $repeat=test_input($_POST["repeat"]);
                        }
                }


$sql = mysqli_query($link, "INSERT INTO registration (username, password, repassword)

                               VALUES ('$email', '$psw', '$repeat')");


   if ($sql  === TRUE) {
    echo "New record created successfully";
  } else {
   echo "You were not signed up. Try again";

   }
 //  $conn->close();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel="Stylesheet" href="SignUpSheet.css">
</head>
<body>
<div class="center">
<h1>SIGN UP HERE</h1>
</div>
<form class="signup" action="Sign_up.php" method="post" >
    <div class="container">

        <p>Please create Your account and Click Sign up to fill Registration form.</p>
        <hr>

        <label for="email"><b>Email</b></label><br>
        <input type="text" id="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label><br>
        <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

        <label for="repeat"><b>Repeat Password</b></label><br>
        <input type="password" id="repeat" placeholder="Repeat Password" name="repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn" >Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <div class="signup">
        <p>Already have an account? Click:<a href="Signin.php">Sign in</a>.</p>
    </div>

</form>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EARLY WARNING RESPONSE SYSTEM</title>
    <link rel="stylesheet" href="signinSheet.css">
</head>
<body>
<?php
include "db_connection.php";

//Testing Db Connection

                $link = mysqli_connect('localhost', 'root', '', 'ews_system' );
                if ($link===false){
                    die("ERROR: Could not Connect. ".mysqli_connect_error());
                }

//  $UserName = "UserName";
//  $PassWord = "PassWord";

//Declaring and initialization of variables

 $UserName = $PassWord = "";
 $UserName_err = $PassWord_err = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                function test_input($data){
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                //Validation of Data
                if (empty($_POST["UserName"])){
                    $UserName_err="Enter Your User Name";
                       }else{
                    $UserName=test_input($_POST["UserName"]);
                            }


                if (empty($_POST["PassWord"])){
                    $PassWord_err="Enter your Password";
                }else{
                    $PassWord=test_input($_POST["PassWord"]);
                     }
                }
                 //End of data validation



    $sql = mysqli_query($link,"INSERT INTO signup (email, password)
            VALUES ('$UserName','$PassWord')");

                        if ($sql === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Wrong User name of password";

                    }

  //  $conn->close();

?>

<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="indicators.php">Indicators</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="transition">
<h1>EARLY WARNING SYSTEM</h1>
</div>


<div class="container">
    <div class="links">

        <a href="Sign_up.php" target="_blank">Create Your Account</a>
    </div>

    <form action="Signin.php" method="post" id="Submit">

        <label for="U_name">User Name:</label><br>
        <input type="text" id="Uname" name="UserName" placeholder="Enter your User Name" required><br><br>

        <label for="pswd">Password:</label><br>
        <input type="password" id="pswd" name="PassWord" placeholder=" Enter your PassWord" required>
        </div>

        <div class="buttons">
        <label for="Submit"></label>
        <input class="submit" type="Submit" id="Submit" name="Submit">
           <input class="reset" type="reset" id="reset" name="Clear">

        </div>

    </form>


</body>
</html>
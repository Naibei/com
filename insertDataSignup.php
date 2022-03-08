<?php
//This connection inserts Data into Signup table in the Dbase
function insertData ($conn, $email, $psw)
{
    $email = trim(mysqli_real_escape_string($conn, htmlspecialchars($email)));
    $psw = trim(mysqli_real_escape_string($conn, htmlspecialchars($psw)));
   // $DOB = trim(mysqli_real_escape_string($conn, htmlspecialchars($DOB)));


    // IF NAME OR EMAIL IS EMPTY
    if (empty($email) || empty($u_email) || empty($DOB)) {
        return 'Please fill all required fields.';
    }
    //IF EMAIL IS NOT VALID
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'Invalid email address.';
    } else {
        $check_email = mysqli_query($conn, "SELECT `email` FROM `signup` WHERE `email` = '$email'");
        // IF THE EMAIL IS ALREADY IN USE
        if (mysqli_num_rows($check_email) > 0) {
            return 'This email is already registered. Please try another.';
        }
        // INSERTING THE USER DATA
        $query = mysqli_query($conn, "INSERT INTO `signup`(`email`,`psw`) VALUES('$email','$psw')");
        // IF USER INSERTED
        if ($query) {
            return true;
        }
        return 'Opps something is going wrong!';
    }
}



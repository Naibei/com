<?php
function insertData($conn, $fname, $phone,$email,$Area, $sublocation, $location, $ward, $subcounty, $county, $country, $message)
{
    $fname = trim(mysqli_real_escape_string($conn, htmlspecialchars($fname)));
    $phone = trim(mysqli_real_escape_string($conn, htmlspecialchars($phone)));
    $email = trim(mysqli_real_escape_string($conn, htmlspecialchars($email)));
    $Area = trim(mysqli_real_escape_string($conn, htmlspecialchars($Area)));
    $sublocation = trim(mysqli_real_escape_string($conn, htmlspecialchars($sublocation)));
    $location = trim(mysqli_real_escape_string($conn, htmlspecialchars($location)));
    $ward = trim(mysqli_real_escape_string($conn, htmlspecialchars($ward)));
    $subcounty= trim(mysqli_real_escape_string($conn, htmlspecialchars($subcounty)));
    $county = trim(mysqli_real_escape_string($conn, htmlspecialchars($county)));
    $message = trim(mysqli_real_escape_string($conn, htmlspecialchars($message)));





    // IF NAME OR EMAIL IS EMPTY
    if (empty($fname) || empty($phone) || empty($email) ||empty($Area) || empty($sublocation) || empty($location) || empty($ward) || empty($subcounty) ||empty($county) || empty($message)){
        return 'Please fill all required fields.';
    }
    //IF EMAIL IS NOT VALID
    elseif (!filter_var($fname, FILTER_VALIDATE_EMAIL)) {
        return 'Invalid email address.';
    } else {
        $check_fname = mysqli_query($conn, "SELECT `fname` FROM `incidence` WHERE `fname` = '$fname'");
        // IF THE EMAIL IS ALREADY IN USE
        if (mysqli_num_rows($check_fname) > 0) {
            return 'This email is already registered. Please try another.';
        }
        // INSERTING THE USER DATA
        $query = mysqli_query($conn, "INSERT INTO `incidence`(`Fullname', 'Yourphonenumber', 'Youremail', 'Area', 'Sublocation', 'Location', 'Ward', 'Subcounty', 'County', 'Country', 'Message') 
         VALUES ($fname),($phone), ($email), ($Area), ($sublocation), ($location), ($ward), ($subcounty), ($county),($message)))");
        // IF USER INSERTED
        if ($query) {
            return true;
        }
        return 'Opps something is going wrong!';
    }
}

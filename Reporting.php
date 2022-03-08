<?php

include "db_connection.php";

$link = mysqli_connect('localhost', 'root', '', 'ews_system' );
if ($link===false){
    die("ERROR: Could not Connect. ".mysqli_connect_error());
}


    //Declaration and initializing with empty values
$fname = $phone = $email = $area = $sublocation = $location = $subcounty = $county = $country = $message ="";

    $fname_err = $phone_err =$email_err =$area_err = $sublocation_err = $location_err = $subcounty_err = $county_err = $country_err = $message_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    function test_input($data){
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
            //Validating fname
      if (empty($_POST["fname"])){
            $fname_err="Enter Your name";
            }else{
                $fname=test_input($_POST["fname"]);
                }
                if (empty($_POST["phone"])){
                    $phone_err="Enter your Phone";
                }else{
                    $phone=test_input($_POST["phone"]);
                }

                if (empty($_POST["email"])){
                    $email_err="Enter your email";
                    }else{
                    $email=test_input($_POST["phone"]);
                }

                if (empty($_POST["area"])){
                    $area_err="Enter the area the incidence happen";
                }else{
                    $area=test_input($_POST["area"]);
                }

                if (empty($_POST["sublocation"])){
                    $sublocation_err="Enter the Sublocation";
                }else{
                    $sublocation=test_input($_POST["sublocation"]);
                }

                if (empty($_POST["location"])){
                    $location_err="Enter the Location";
                }else{
                    $location=test_input($_POST["location"]);
                }

                if (empty($_POST["subcounty"])){
                         $subcounty_err = "Enter the subcounty";
                  }else{
              $subcounty=test_input($_POST["subcounty"]);
                  }


                if (empty($_POST["county"])){
                    $county_err="Enter the County";
                }else{
                    $county=test_input($_POST["county"]);
                }

                    if (empty($_POST["country"])){
                        $country_err="Enter the Country";
                    }else{
                        $country=test_input($_POST["country"]);
                    }


    if (empty($_POST["message"])) {
                    $message_err = "Type your report here";
                }else{
                    $message=test_input($_POST["message"]);
                }

}
    $sql = mysqli_query($link, "INSERT INTO incidence (Fullname, Yourphonenumber, Youremail, Area, Sublocation, Location, Subcounty, County, Country, Message)
                                                        VALUES ('$fname', '$phone', '$email', '$area', '$sublocation', '$location', '$subcounty', '$county', '$country', '$message')");

    if ($sql === TRUE) {
        echo "New record created successfully";
    }
    else {
       echo "Records not submitted";
   }
//}
//$conn->close();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incidence</title>
<link rel="stylesheet" href="incidence.css">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="indicators.php">Indicators</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="h1">
<h1>INCIDENCE REPORTING</h1>
</div>
<div class="row">

    <div class="column">PERSONAL DETAILS<br>
      <div class="h4"> <h4>FILL THIS FORM CORRECTLY</h4></div><br>

        <form class="details" method="post" action="Reporting.php" ><br>

        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fname" placeholder="Enter your full names ">

        <label for="phone">Your Phone Number</label>
        <input type="number" id="phone" name="phone" placeholder="Enter Your phone Number">

        <label for = "email" >Your Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your Active email">

        <h5 class="h5">Fill this section clearly</h5>
<label for="area">Enter the Area of Incidence:</label>
            <input type="text" name="area" id="area" placeholder="Enter the area">

            <label for="sublocation">Enter the Sub location</label>
            <input type="text" name="sublocation" id="sublocation" placeholder="Enter the sublocation " >

            <label for="location">Enter the Location</label>
            <input type="text" name="location" id="location" placeholder="Enter the location where incidence occur"><br><br>

            <label for="division"> Enter the Division</label>
            <input type="text" name="division" id="division" placeholder="Enter the Division the incidence">

            <label for="subcounty"> Enter the Sub County</label>
            <input type="text" name="subcounty" id="subcounty" placeholder="Enter the sub-county">

            <label for="county">Enter the County</label>
            <input type="text" name="county" id="county" placeholder="Enter your county"><br><br>

            <label for="country">Enter the Country</label>
            <input type="text" name="country" id="country" placeholder="Enter the Country"><br><br>

            <label for="message">Please Enter your report here</label><br><br>
            <textarea id="message" name="message" rows="4" cols="50" ></textarea>
            <br><br>

            <div class="clearfix">
                <button type="submit" name="submit" class="buttonbtn" >Submit</button>
<!--                <input type="submit" id="submit" name="submit">-->

                <button type="submit" name="cancel" class="cancelbtnbtn">Cancel</button>
<!--                <input type="reset" id="submit" name="submite">-->
            </div>


    </form>
    </div>
    <div class="column">PEACE AND CONFLICT
       <!-- <div class="h4"> <h4>CLEARLY SELECT THE LEVEL</h4></div>
  --  <h5>Select the Level</h5>-->
<!--        <form class="details" action="Reporting.php" method="post" onformdata="Data saved">-->
<!--            <div>-->
<!--        <label for="l1">Level One</label>-->
<!--        <input type="radio" id="l1" name="fav_language" value="l1">-->
<!---->
<!--        <label for="l2">Level Two</label>-->
<!--        <input type="radio" id="l2" name="fav_language" value="l2">-->
<!---->
<!--        <label for="l3">Level Three</label>-->
<!--        <input type="radio" id="l3" name="fav_language" value="l3">-->
<!---->
<!--        <label for="l4">Level Four</label>-->
<!--        <input type="radio" id="l4" name="fav_language" value="l4">-->
<!---->
<!--<h4> Level One Indicators</h4>-->
<!--            <label for="level1">Level One</label><br>-->
<!--            <select id="level1" name="level1">-->
<!--                <options value="secretm">Secret Meetings</options>-->
<!--                <option value="stpeople">Strange People in the area </option>-->
<!--                <option value="fshortage">Food Shortage/Increase in food pricing</option>-->
<!--                <option value="ebusinesses">Early closing of businesses</option>-->
<!--                <option value="estocking">Early Stocking of food stuffs</option>-->
<!--                <option value="murm">Murmuring </option>-->
<!--            </select><br>-->
<!---->
<!--                <label for="level2">Level Two</label><br>-->
<!--                <select id="level2" name="level2">-->
<!--                    <options value="clanguage">Coded language</options>-->
<!--                    <option value="tproperty">Transfer of property </option>-->
<!--                    <option value="stradel">Severing trade links</option>-->
<!--                    <option value="dyouths">Disappearence of youths</option>-->
<!--                    <option value="velders">Village elders calling too many meetings</option>-->
<!--                    <option value="scomplains">Social complaints</option>-->
<!--                    <option value="fconflicts">Family conflicts and disagreements</option>-->
<!--                    <option value="ptransfers">Transfers </option>-->
<!--                </select><br>-->
<!----Level Three Incidences--
              <label for="level3">Level Three</label><br>-->
<!--                <select id="level3" name="level3">-->
<!--                    <options value="hspeach">Hate speech</options>-->
<!--                    <option value="leaflets">Leaflets </option>-->
<!--                    <option value="mgroups">Militia groups</option>-->
<!--                    <option value="spopulation">Shifting population</option>-->
<!--                    <option value="habuse">Human rights abuse eg rape</option>-->
<!--                    <option value="passasinations">Political assasinations</option>-->
<!--                    <option value="lcurfews">Local curfews??</option>-->
<!--                    <option value="dabuse">Drug and susbstance abuse</option>-->
<!--                </select><br>-->
<!--              !--Level Four Incidences-->
<!--                <label for="level4">Level Four</label><br>-->
<!--                <select id="level4" name="level4">-->
<!--                    <options value="robbery">Robbery</options>-->
<!--                    <option value="threats">Threats </option>-->
<!--                    <option value="murder">Murder</option>-->
<!--                    <option value="hburning">Burning of houses</option>-->
<!--                    <option value="poarching">poaching</option>-->
<!--                    <option value="sgrouping">social groupings</option>-->
<!--                    <option value="lcurfews">Local curfews??</option>-->
<!--                    <option value="htrafficking">human trafficking</option>-->
<!--                </select><br><br>-->
<!--              !--Sexual Gender Based Violence-->
<!--                <label for="sgbv">SGBV Indicators</label><br>-->
<!--                <select id="sgbv" name="sgbv">-->
<!--                    <options value="fgm">FGM</options>-->
<!--                    <option value="fmarriage">early/forced marriages </option>-->
<!--                    <option value="epregnancies">early pregnancies</option>-->
<!--                    <option value="dviolence">domestic violence</option>-->
<!--                    <option value="cdefilement">child defilement</option>-->
<!--                    <option value="rape">rape</option>-->
<!--                    <option value="kidnapping">kidnapping</option>-->
<!--                    <option value="suicide">suicide</option>-->
<!--                </select><br><br><br>-->
<!--                <div class="clearfix">-->
<!--                    <button type="button" class="savebtn" >Save</button>-->
<!--                    <button type="submit" class="clearlbtn">Clear</button>-->
<!--                </div>-->
    </div>
    </form>

   <!-- <div class="column">ELECTION RELATED

    </div>-->

</div>
</body>
</html>
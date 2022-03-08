<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Registration</title>

    <link rel="stylesheet" href="New_memberSheet.css">

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
<div class="slide_show">
   <!-- <div class="numbertext">1 / 3</div>
    <img src="images/background.jpg" style="width:20%" height="30%">
    <img src="images/people1.jpg" style="width: 30% height:50%">
    <div class="text">EWS</div>-->
    <h1>NEW MEMBER REGISTRATION</h1>
</div>
<hr>
<hr>
<div class="instruct">
<p>Fill this form to register as a new member</p>
</div>
<div class="New_member">
    <form>
        <label for="F_name"><b> First Name</b></label>
        <input type="text" id="F_name" name="F_Name" placeholder="Enter Your First Name">

        <label for="L_name"><b>Last Name</b></label>
        <input type="text" id="L_name" name="L_name" placeholder="Enter your Last Name">

        <label for="O_Name"> <b>Other Names</b></label>
        <input type="text" ID="O_Name" name="O_Name" placeholder="Enter Your Other Name"><br><br>

        <label><b>Gender:</b></label>
        <label for="Male">Male</label>
        <input type="radio" id="Male" name="fav_language" value="Male">

        <label for="Female">Female</label>
        <input type="radio" id="Female" name="fav_language" value="Female">

        <label for="Others">Others</label>
        <input type="radio" id="Others" name="fav_language" value="Others">

        <label for="Mstatus"><b>Marital Status:</b></label>

        <label for="Single"> Single</label>
        <input type="radio" id="Single" name="fav_language"value="Single">

        <label for="Married">Married</label>
        <input type="radio" id="Married" name="fav_language" value="Married">

        <label for="Divorced">Divorced</label>
        <input type="radio" id="Divorced" name="fav_language" value="Divorced">

        <label for="Nosaid">Not Willing to Say</label>
        <input type="radio" id="Nosaid" name="fav_language" value="Nosaid">
        <label for="DOB"><b>Date of Birth</b></label>
        <input type="date" id="DOB" name="fav_language" value="DOB" placeholder="Enter Date of Birth"><br><br>

        <label for="ID_Number"><b>ID Number</b></label>
        <input type="number" id="ID_Number" name="ID_Number" placeholder="Enter your ID Number">
        <label for="email"><b>Your Official Email</b></label>
        <input type="email" id="email" name="email" placeholder="Enter your official email">
        <label for="phone"><b>Phone Number</b></label>
        <input type="number" id="phone" name="phone">

        <label for="county"><b></b>County</b></label>
       <select id="County" name="County">
           <options>Trans-Nzoia</options>
           <option value="Bungoma">Bungoma</option>
           <option value="Nairobi">Nairobi</option>
           <option value="West Pokot">West Pokot</option>
           <option value="Kisumu">Kisumu</option>
           <option value="Mombasa">Mombasa</option>
           <option value="Turkana">Turkana</option>
       </select><br><br>
        <label for="Sub-County"><b>Sub-County</b></label>
        <select id="Sub-County" name="Sub-county">
         <option value="Mt.Elgon">Mt. Elgon</option>
            <option value="Kwanza">Kwanza</option>
            <option value="Centre Kwanza">Centre Kwanza</option>
            <option value="Eldoret">Eldoret</option>
            <option value="Wajir">Wajiri</option>
            <option value="Siaya">Siaya</option>
            <option value="Kajibora">Kajibora</option>
        </select>
        <label for="ward"><b>Ward</b></label>
        <input type="text" id="ward" name="Ward" placeholder="Enter Your Ward">

        <label for="Location"><b>Location</b></label>
        <input type="text" id="Location" name="Location" placeholder="Enter your Location">

        <label for="Sub_Location"><b>Sub-Location</b></label>
        <input type="text" id="Sub_Location" name="Sub_Location" placeholder="Enter your Sub-Location">

        <label for="Area"><b>Area</b> </label>
        <input type="text" id="Area" name="Area" placeholder="Enter your Area of residence">

        <!--Education background-->

        <div class="education">
           <div class="header2"> <h2>Select your highest Level of Education</h2></div>
<label for="PHD">PHD</label>
            <input type="checkbox" id="PHD" name="PHD">
            <label for="Doctorate"> Doctarate</label>
            <input type="checkbox" id="Doctorate" name="Doctarate">
            <label for="Degree">Degree</label>
            <input type="checkbox" id="Degree" name="Degree">
            <label for="Diploma">Diploma</label>
            <input type="checkbox" id="Diploma" name="Diploma">
            <label for="Certificate">Certificate</label>
            <input type="checkbox" id="Certificate" name="Certificate">
            <label for="KCSE">KCSE</label>
            <input type="checkbox" id="KCSE" name="KCSE">
            <label for="KCPE">KCPE</label>
            <input type="checkbox" id="KCPE" name="KCPE">
            <label for="None">None</label>
            <input type="checkbox" id="None" name="None">

        </div><br><br>

        <div class="buttons">
            <button type="submit" class="submit">Register</button>
            <button type="reset" class="reset">Concel</button>
        </div>

    </form>

</div>
<div class="footer">
    </span><footer class="rights">All rights reserved @2020 David Naibei. Design and Hosted By Setlink ICT Centre</footer>
</div>
</body>
</html>
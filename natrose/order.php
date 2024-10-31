<?php

if(isset($_POST['submit']))
{
    $surname=$_POST['surname'];
    $name=$_POST['naame'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $company=$_POST['company']; 
    $address=$_POST['address'];
    $water=$_POST['water']; 
    $ice=$_POST['ice'];
    $filling=$_POST['filling'];
    $bottle=$_POST['bottle'];  
    $message=$_POST['message'];

$myMail = "info@natrose.co.za";
$header = "FROM: " . $email;

    $email_content = "<html><body>";
    $email_content .= "<table style='font-family: Arial;'><tbody><tr><td style='background: #87CEEB; padding: 10px;'>Surname</td><td style='background: #031F9A; padding: 10px;'>$surname</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Name</td><td style='background: #031F9A; padding: 10px;'>$name</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>E-mail</td><td style='background: #031F9A; padding: 10px;'>$email</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Phone Number</td><td style='background: #031F9A; padding: 10px;'>$phone</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Company</td><td style='background: #031F9A; padding: 10px;'>$company</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Address</td><td style='background: #031F9A; padding: 10px;'>$address</td></tr>";
    $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Purified Water Quantity </td><td style='background: #031F9A; padding: 10px;'>$water</td></tr>";
        $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Ice-cubes Quantity</td><td style='background: #031F9A; padding: 10px;'>$ice</td></tr>";
            $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Filling</td><td style='background: #031F9A; padding: 10px;'>$filling</td></tr>";
         $email_content .= "<tr><td style='background: #87CEEB; padding: 10px;'>Bottle Shape</td><td style='background: #031F9A; padding: 10px;'>$bottle</td></tr>";
     $email_content .= "<p style='font-family: Arial; font-size: 1.25rem;'><strong>Special Request from $name &mdash;</strong><i> $message</i>.</p>";
    $email_content .= "<tr><td style='background:  #87CEEB; padding: 10px;'></td><td style='background: #031F9A; padding: 10px;'></td></tr></tbody></table>";

    $email_content .= '</body></html>';
 
mail($myMail, "Natrose Order", $email_content, $headers);
header("location: confirm.php?mailsend");
}
 ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Natrose | Ordr</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<meta charset="utf-8" />
<meta name="keywords" content="Water Responsive web template, water, bottled water, personalised water bottled, " />
<meta name="robots" content="noindex" />
<script>
addEventListener("load", function () {
setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
window.scrollTo(0, 1);
}
</script>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/nav.css" type="text/css" rel="stylesheet" media="all">
<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.info p {
text-align:center;
color: #999;
text-transform:none;
font-weight:600;
font-size:15px;
margin-top:2px
}

.info i {
color:#F6AA93;
}
form h1 {
font-size: 18px;
background: #F6AA93 none repeat scroll 0% 0%;
color: rgb(255, 255, 255);
padding: 22px 25px;
border-radius: 5px 5px 0px 0px;
margin: auto;
text-shadow: none; 
text-align:left
}

form {
border-radius: 5px;
max-width:1000px;
width:100%;
margin: 5% auto;
background-color: #FFFFFF;
overflow: hidden;
}

p span {
color: #F00;
}

p {
margin: 0px;
font-weight: 500;
line-height: 2;
color:#333;
}

h1 {
text-align:center; 
color: #666;
text-shadow: 1px 1px 0px #FFF;
margin:50px 0px 0px 0px
}

input {
border-radius: 0px 5px 5px 0px;
border: 1px solid #031F9A;
margin-bottom: 15px;
width: 75%;
height: 40px;
float: left;
padding: 0px 15px;
}

a {
text-decoration:inherit
}

textarea {
border-radius: 0px 5px 5px 0px;
border: 1px solid #031F9A;
margin: 0;
width: 75%;
height: 130px; 
float: left;
padding: 0px 15px;
}

.form-group {
overflow: hidden;
clear: both;
}

.icon-case {
width: 35px;
float: left;
border-radius: 5px 0px 0px 5px;
background:#eeeeee;
height:42px;
position: relative;
text-align: center;
line-height:40px;
}

i {
color:#555;
}

.contentform {
padding: 40px 30px;
}

.bouton-contact{
background-color: #81BDA4;
color: #FFF;
text-align: center;
width: 100%;
border:0;
padding: 17px 25px;
border-radius: 0px 0px 5px 5px;
cursor: pointer;
margin-top: 40px;
font-size: 18px;
}

.leftcontact {
width:49.5%; 
float:left;
border-right: 1px dotted #CCC;
box-sizing: border-box;
padding: 0px 15px 0px 0px;
}

.rightcontact {
width:49.5%;
float:right;
box-sizing: border-box;
padding: 0px 0px 0px 15px;
}

.validation {
display:none;
margin: 0 0 10px;
font-weight:400;
font-size:13px;
color: #DE5959;
}

#sendmessage {
border:1px solid #fff;
display:none;
text-align:center;
margin:10px 0;
font-weight:600;
margin-bottom:30px;
background-color: #EBF6E0;
color: #5F9025;
border: 1px solid #B3DC82;
padding: 13px 40px 13px 18px;
border-radius: 3px;
box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
display:block;
}
</style>
</head>
<body>
<?php include('includes/headers.php'); ?>
<body>
<form method="POST">
<h4 class="w3pvt-title" style="text-align: center;padding: 40px;">Order Here</h4>
<div class="contentform">
<div class="form-group">
<p>Surname<span>*</span></p>
<span class="icon-case"><i class="fa fa-male"></i></span>
<input type="text" name="surname" id="nom" data-rule="required"  required="" />
<div class="validation"></div>
</div> 
<div class="form-group">
<p>Name <span>*</span></p>
<span class="icon-case"><i class="fa fa-user"></i></span>
<input type="text" name="name" id="prenom" data-rule="required" required="" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>E-mail <span>*</span></p>	
<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
<input type="email" name="email" id="email" data-rule="email" required="" />
<div class="validation"></div>
</div>	
<div class="form-group">
<p>Phone number <span>*</span></p>	
<span class="icon-case"><i class="fa fa-phone"></i></span>
<input type="text" name="phone" id="phone" data-rule="maxlen:10" required="" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>Company <span>*</span></p>
<span class="icon-case"><i class="fa fa-home"></i></span>
<input type="text" name="company" id="society" data-rule="required" required="" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>Address <span>*</span></p>
<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
<input type="text" name="address" id="adresse" data-rule="required" required="" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>Purified Water Quantity </p>
<span class="icon-case"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
<input type="text" name="water" id="postal"/>
<div class="validation"></div>
</div>	
<div class="form-group">
<p>Ice-cubes Quantity </p>
<span class="icon-case"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
<input type="text" name="ice" id="ville" />
<div class="validation"></div>
</div>	
<div class="form-group">
<p>Filling </p>
<span class="icon-case"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
<input type="text" name="filling" id="fonction" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>Bottle Shape </p>	
<span class="icon-case"><i class="fa fa-list-ol" aria-hidden="true"></i></span>
<input type="text" name="bottle" id="sujet" />
<div class="validation"></div>
</div>
<div class="form-group">
<p>Detailed Description <span>*</span></p>
<span class="icon-case"><i class="fa fa-comments-o"></i></span>
<textarea name="message" rows="14" data-rule="required" required="" /></textarea>
<div class="validation"></div>
</div>	
</div>
<button type="submit" class="btn btn-contact"  name="submit" style="background-color: #031F9A; padding: 20px; color: #fff; position: relative; left: 60px;">Order Now</button>
</form>	
<?php include('includes/footer.php'); ?>
</body>
</html>
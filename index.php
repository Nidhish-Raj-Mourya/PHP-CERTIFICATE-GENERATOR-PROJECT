<?php 
if(isset($_POST['namee'])){
	header('content-type: image/jpeg');
	$font=realpath('GABRIOLA.TTF');
	$font1=realpath('AGENCYR.TTF');
	$image=imagecreatefromjpeg("certificate.jpeg");
	$color=imagecolorallocate($image, 0, 0, 0);
	//$name="Nidhish Raj Mourya";
	$webinar = "Scripting Languages For Design Automation";
	$date=date('d M, Y');
	imagettftext($image, 24, 0, 390, 320, $color,$font, $_POST['namee']);
	imagettftext($image, 24, 0, 320, 363, $color,$font, $webinar);
	imagettftext($image, 19, 0, 450, 412, $color,$font1, $date);
	imagejpeg($image);
	imagedestroy($image);
}
?>

<html>
<head>	
<title> Webinar Registration</title>
</head>
<body style="background-color:#e6ffff">
<hr size="4" width="100%" color="black"> 

<style> div.image img{
	style="position:absolute;
  top:0px;
 background-color:#ffffff;}
 </style>
 
  
 <style>.texts{
  position: absolute;
   left:400px;
   top: 18px;
  width: 700px;
   background-color:#ffffff;

 }
 </style>
 
<b>
<div class="container" style="background-color:#ffffff;">
    <div class="image" >
 <img src="logo.png" alt="w_logo" width=140 height=140 ALIGN=”right”><p style="color:black;"/>
</div>

<div class="texts" > 
 	<center><h1>Shri Vaishnav Vidyapeeth Vishvidyalaya </h1>
	<h2>WEBINAR REGISTRATION FORM </h2> </center>
    </div>
</div>

<hr size="4" width="100%" color="black" > 
<form method="post">
<h3>
<tr>
<th><center>Enter your Full Name</th>
<td><input type="text" name="namee" id="fn1" maxlength="50" title="full name" placeholder=" Name" required style="font-size:10pt;color:black;background-color:white;border:2px solid black ;margin-left: 69px;padding:3px"/></td></br>
</br>
</center>
</tr>
<tr>
<th><center>Enter your Email Address</th>
<td><input type="email" name="fn" id="fn3" maxlength="50" title=" email" placeholder=" E-mail" required style="font-size:10pt;color:black;background-color:white;border:2px solid black;margin-left: 35px;padding:3px"/></td></br>
</br>
</center>
</tr>
<tr>
<th><center>Enter your Mobile Number</th>
<td><input type="number" style="font-size:10pt;color:black;background-color:white;border:2px solid black;margin-left: 25px;padding:3px"/></td></br>
</br>
</center>
</tr>
<tr>
<th><center>Enter your Institute Name</th>
<td><input type="text" style="font-size:10pt;color:black;background-color:white;border:2px solid black;margin-left: 32px;padding:3px"/></td></br>
</br>
</center>
</tr>
<tr>
<th><center>Enter your Branch Name</th>
<td><input type="text"style="font-size:10pt;color:black;background-color:white;border:2px solid black;margin-left: 43px;padding:3px"/></td></br>
</br>
</center>
</tr>

<tr>
<th><center>Select your Date of Birth</th>
<td><input type="date" style="background-color:white;border:2px solid black;margin-left: 65px;padding:3px"/></br>
</br></td>
</center>
</tr>
<tr>
<th><center>Select your Country Name</th>
<td>
<select name="country" style="background-color:white;font-size:10pt;border:2px solid black;margin-left: 48px;padding:5px">
<option value="" selected="selected" disabled="disabled">Select your Country </option>
<option value="1">Australia</option>
<option value="2">Canada</option>
<option value="3">China</option>
<option value="4">India</option>
<option value="5">Italy</option>
<option value="6">Japan</option>
<option value="7">Newzeland</option>
<option value="8">Pakistan</option>
<option value="9">Russia</option>
<option value="10">South Africa</option>
</select></br>
</br>
</td>
</center>
</tr>
<tr>
<th><center>Select your State Name</th>
<td>
<select name="state" style="background-color:white;font-size:10pt;border:2px solid black;margin-left: 90px;padding:5px">
<option value="" selected="selected" disabled="disabled">Select your State</option>
<option value="1">Andhra Pradesh</option>
<option value="2">Bihar</option>
<option value="3">Gujarat</option>
<option value="4">Karnataka</option>
<option value="5">kerala</option>
<option value="6">Madhya pradesh</option>
<option value="7">Maharastra</option>
<option value="8">Punjab</option>
<option value="9">Rajasthan</option>
<option value="10">Uttar pradesh</option>
</select></br>
</br>
</td>
</center>
</tr>
</h3>
<tr>
<center>
<td colspan="2" align="center">
<input type="submit" value="SUBMIT" style="font-size:15pt;color:white;background-color:black;border:3px solid black;padding:5px">
</br>
</td>
<hr size="4" width="100%" color="black"> 

</center>
</tr>
</table>

</form>
</body>
</html> 
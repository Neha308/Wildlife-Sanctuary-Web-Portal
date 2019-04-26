<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jqyery.min.js"></script>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("hint").innerHTML = "";
        
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("hint").innerHTML = this.responseText ;
            }
        }
        xmlhttp.open("GET", "valid.php?qa=" + str, true);
        xmlhttp.send();
    }
}
</script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" type="text/css" href="style2.css">
	
</head>
<body>
	<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="template1.php" class="w3-bar-item w3-button w3-padding-large">HOME<style></style></a>
    <a href="ticket.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
    <a href="login21.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CATEGORIES</a>
    <a href="images1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">IMAGES</a>
    <a href="loginform1231.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
    <a href="signupform1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" type="css/text">REGISTER</a>
    <a href="aboutus3.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" type="css/text">ABOUT US</a>
    <a href="contactus1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT US</a>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
	<h1>Registration Form</h1>
	<div class="signup">
		<h2>Register here</h2>
		<form id="signup" action="insert.php" method="POST">
			
			<label>First Name:</label><br>
			<input type="text" name="Fname" id="mail-name" placeholder="Enter your First Name" required><br><br>
			<label>Last Name:</label><br>
			<input type="text" name="lname" id="name" placeholder="Enter your Last Name" required><br><br>
			<label>Mobile Number:</label><br>
			<select name="ph" required>
				<option value="91">+91</option>
				<option value="92">+92</option>
				<option value="93">+93</option>
				<option value="94">+94</option>
				<option value="95">+95</option>
			</select>
			<input type="number" name="MNum" id="num" placeholder="Enter your Mobile Number" required><br><br>
			<label>Email:</label><br>
			<input type="email" name="email" id="mail-email" placeholder="Enter your Email" onkeyup="showHint(this.value)"><p id="hint"></p><br><br>
			<label>Password:</label><br>
			<input type="password" name="password" id="name" placeholder="Enter your Password" required><br><br>
			<label>Confirm Password:</label>
			<input type="password" name="ConfirmPassword" id="name" placeholder="Confirm your Password" required><br><br>
			<input type="radio" name="gender" id="m" required><span id="male">&nbsp; Male</span>&nbsp;&nbsp;
			<input type="radio" name="gender" id="f" required><span id="female">&nbsp; Female</span>&nbsp;&nbsp;
			<input type="radio" name="gender" id="o" required><span id="female">&nbsp; Other</span>&nbsp;&nbsp;<br><br>
			<input type="submit" value="Submit" id="mail-submit"><br><br>
			<a href="home.php" style="text-decoration: none; color:black; ">go to home page</a>
			<p class="form-message"></p>
		</form>
	</div>
	
</body>
</html>
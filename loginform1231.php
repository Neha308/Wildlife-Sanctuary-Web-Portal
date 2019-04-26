<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<title>LOGIN FORM</title>
		<link rel="stylesheet" type="text/css" href="style1.css">
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
    <a href="aboutus1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" type="css/text">ABOUT US</a>
    <a href="contactus1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT US</a>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<div class="w3-content" style="max-width:2000px;margin-top:46px">
	<div class="loginbox">
		<img src="images.png" class="images">
		<h1>Login Here</h1>
		<form action="process2.php" method="POST">
			<p>Username</p>
			<input type="text" name="uid" placeholder="Enter your Username" required>
			<p>Password</p>
			<input type="Password" name="pwd" placeholder="Enter your Password" required>
			<input type="submit" name="" value="Login")">
			<a href="#">lost your Password?</a><br>
			<a href="#">Don't have an account?</a><br>

			
		</form>
	</div>
	<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</body>
</html>
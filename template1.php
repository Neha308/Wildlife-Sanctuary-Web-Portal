<!DOCTYPE html>
<html>
<title>Wildlife Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
  <style>
    body{
      background-image: url("2.jpg");
      background-position: right top,left bottom,left;
      background-size: 1500px,1500px;
      background-repeat: repeat;
      font-size: 20px;
      
    }
  </style>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
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

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="aboutus3.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
  <a href="ticket.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="signupform1.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REGISTER</a>
  <a href="contactus1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" onclick="myFunction()">CONTACT US</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  

  <!-- The Home Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">WILDLIFE SANCTUARIES AND NATIONAL PARKS</h2>
    <p class="w3-opacity"><i>We love Animals</i></p>
    <b>A National Park is a natural space that is dedicated for the purposes of conservation, recreation, and protection. Different countries have their own national parks and the designation of national parks across the globe depends on each individual country’s system and judgment. But most national parks have similar aims – to conserve wild nature in order to protect it for the future as well as allow people the chance to enjoy it. National parks are often a symbol of national pride. Most national parks are open to the public and provide opportunities for recreation, camping, and walking. Most national parks have an outstanding level of natural beauty, whether the beauty comes from mountains, lakes, rivers or plains.</b>
    <p class="w3-justify"></p>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TOUR DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">25</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">27</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">29</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <alt="Uttarakhand" style="width:100%">
          <div class="w3-container w3-white">
            <p><b>Uttarakhand</b></p>
            <p>Corbett National Park is one of the best natural destinations where the richest concentrations of animals occur. Game drives in an open jeep safari vehicles are the best way to discover the beauty and wilderness.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <alt="West Bengal" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>West Bengal</b></p>
            <p>Sunderbans national park is located at the South Eastern tip of the 24 Paraganas district in the state of West Bengal. It got its name from one of the mangrove plants known as Sundari.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <alt="Mumbai" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Mumbai</b></p>
            <p>Sanjay Gandhi National Park is an 87 km² protected area near Mumbai in Maharashtra State in India.Home to a variety of plants and animals, the green cover here, also attracts a variety of birds.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, Rs50 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Mumbai, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9824675424<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: wildlifesanc@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>

</footer>

<script>


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

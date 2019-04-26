<!DOCTYPE html>
<html>
<head>
  <title>Ticket Booking</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
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
  <style>
    body{
      background-image: url("2.jpg");
      background-position: right top,left bottom,left;
      background-size: 1500px,1500px;
      background-repeat: repeat;
      font-size: 20px
      
    }
  </style>
 

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
  <form action="ticket1.php" method="POST">
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, Rs50 per person</label></p>
        <input class="w3-input w3-border" type="text" name="NoOfTickets" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" name="Email" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" onclick="alert('Tickets booked successfully !!!')">PAY<i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>
</form>
  </body>
</html>
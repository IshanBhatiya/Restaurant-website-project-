<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Restaurant-website/css/booking.css">
    <title>Book Your Table | Central Perk</title>
</head>

<body class="main_bg">
    <nav>
        <div class="navbar magic-shadow">
          <div class="wrapper flex justify-center">
              <a href="index.php">Home</a>
              <a href="About.php">About us</a>
              <a href="menu.php" class="active">Menu</a>                           
              <a href="contact.php">Contact us</a>
              <a href="booking.php">Book Your Table</a>
          </div>
      </div>
    
    </nav>
    <div class="form">
        <div class="form-text">
            <h1><span><img src="../Restaurant-website/icons/art-1.png" alt=""></span>Book Now <span><img src="../Restaurant-website/icons/art-1.png" alt=""></span></h1>
            <p>CENTRAL PERK AT YOUR SERVICE..... </p>
        </div>
        <div class="main-form">
            <form action="index.php" method="get">
                <div>
                    <span>Your full name ?</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your email address ?</span>
                    <input type="email" name="name" id="name" placeholder="Write your email here..." required> 
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span>How many people ?</span>
                    <select name="people" id="people" required>
                        <option value="0"><---People---></option>
                        <option value="1">1 person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>What time ?</span>
                    <input type="time" name="time" id="time" placeholder="Time" required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>Your phone number ?</span>
                    <input type="number" name="number" id="number" placeholder="Write your number here..." required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
    
  <footer class="copyright">
    <div>
        Copyright © 2022 .All rights reserved by <a href="https://www.instagram.com/the.northern.boy/ ">ISHAN BHATIA </a>
    </div>
  </footer>
</body>

</html>
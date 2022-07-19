<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="../Restaurant-website/css/contact.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar magic-shadow">
      <div class="wrapper flex justify-center">
          <a href="index.php">Home</a>
          <a href="About.php">About us</a>
          <a href="menu.php" class="active">Menu</a>                           
          <a href="contact.php">Contact us</a>
          <a href="./booking form.php">Book Your Table</a>
      </div>
    </div>

  </nav>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">XYZ,Street </div>
          <div class="text-two">himacal pradesh</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91-1234567890</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">E-mail</div>
          <div class="text-two">support@central perk.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">FEEDBACK...</div>
      <form action="#">
        <div class="input-box">
          <input type="text" name ="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="text" name ="email"  placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
            <input type="text" name ="message" placeholder="Enter your message" required>
        </div>
        <div class="button">
          <input type="button" name="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>


  <footer class="copyright">
    <div>
        Copyright © 2022 .All rights reserved by <a href="https://www.instagram.com/the.northern.boy/ ">ISHAN BHATIA </a>
    </div>
  </footer>

</body>
</html>

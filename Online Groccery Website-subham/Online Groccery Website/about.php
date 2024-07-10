<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="box">
            <img src="images/about-img-1.png" alt="">
            <h3>Why choose us?</h3>
            <p>1.Freshness You Can Trust<br></p>
            <p>2.Convenience at Your Fingertips<br></p>
            <p>3.Competitive Prices and Great Deals<br></p>
            <p>4.Safe and Contactless Delivery<br></p>
            <p>5.Exceptional Customer Service<br></p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

         <div class="box">
            <img src="images/about-img-2.png" alt="">
            <h3>What we provide?</h3>
            <p>1.Fresh and Quality Products<br></p>
            <p>2.Convenient and Easy Shopping<br></p>
            <p>3.Competitive Prices and Great Deals<br></p>
            <p>4.Fast and Reliable Delivery<br></p>
            <p>5.Commitment to Sustainability<br></p>
            <a href="shop.php" class="btn">our shop</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">Clients reivews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"I've been using this online grocery service for a few months now, and I'm absolutely thrilled with the convenience and quality. The produce is always fresh, and the delivery is punctual. It saves me so much time, and the prices are competitive too. Highly recommend!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Michael W.</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"I’ve been really impressed with the freshness of the fruits and vegetables. The organic selection is particularly good. The only thing keeping me from giving five stars is the occasional out-of-stock item. Overall, though, it’s a great service and makes life so much easier!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emma R.</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"This service has been a game-changer for my family. With our busy schedules, it’s tough to find time to go grocery shopping. Now, we just order everything we need online, and it’s delivered right to our door. The delivery people are always friendly, and the products are top-notch."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>James K.</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"I was blown away by the ease of ordering and the prompt delivery. The website is intuitive, and they have a great range of products. Plus, I love the sustainable packaging! I’m so glad I switched to this online grocery service. It’s a life-saver."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Olivia M.</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"Exceptional service! The website is easy to navigate, and I can find everything I need in one place. The delivery is always timely, and the quality of the products, especially the meat and dairy, is excellent. I couldn’t ask for more."</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Liam T.</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"I love how easy it is to shop for groceries online now. The delivery is always on time, and the items are packed securely. The best part is that I can shop for everything from fresh produce to household items in one go. This service has made my life so much easier!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Isabella D.</h3>
         </div>

      </div>

   </section>









   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>
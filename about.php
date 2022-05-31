<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="css/style3.css">

</head>
<body>

<?php

if(isset($message)){
    foreach($message as $msg){
        echo '
        <div class="message">
            <span>'.$msg.'</span>
           <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        
        ';
    }
}
?>

<header class="header">

<div class="logo"><img src="images/logo.jpg" alt=""></div>

<nav class="navbar"> 
    <a href="home.php" class="link ">home</a>
    <a href="about.php" class="link active">about</a>
    <a href="services.php" class="link">services</a>
    <a href="appointment.php" class="link">book</a>
    <a href="contact.php" class="link">contact</a>
</nav>


</header>

<!-- about section starts -->

<section class="about">
    <div class="container">
     <h1 class="heading">about <span>us</span></h1>
         <div class="content-1">
            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                     elit. Maiores totam a iste consequuntur quisquam rerum ipsam c
                    upiditate aut iure nihil beatae ad, enim at sapiente tenetur odio, in aperiam velit?</p>
               <a href="#" class="btn">discover more</a>
            </div>
         
        <div class="image">
            <img src="images/img-10.jpg" alt="">
        </div>
    </div>
    </div>
</section>
<!-- about section ends -->

<!-- hours section starts -->
<h1 class="heading">working time</h1>
<section class="opening-time">
    <div class="open">
        <h3><i class="fa fa-calendar-check-o"></i> opening days</h3>
        <p>from <span>monday</span> to <span>frieday</span></p>
    </div>
    <div class="open">

        <h3><i class="fas fa-clock"></i> opening hours</h3>
        <p>morning : from<span> 08:00am  </span>to <span>12:00am</span> </p>
        <p>none : from<span> 14:00pm  </span>to <span>18:00pm</span> </p>

    </div>
</section>
<!--hours section ends -->


<!-- team section starts -->
<section class="team">
    <h3 class="heading">our team</h3>
    <div class="box-container">
        <div class="box">
            <img src="images/doctor-6.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
            <div class="content">
                <h3>doctor no. 1 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <div class="box">
            <img src="images/doctor-7.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
            <div class="content">
                <h3>doctor no. 2 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div> <div class="box">
            <img src="images/doctor-8.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
            <div class="content">
                <h3>doctor no. 3 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <div class="box">
            <img src="images/doctor-9.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
           <div class="content">
            <h3>doctor no. 4 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
           </div>
        </div>
        <div class="box">
            <img src="images/doctor-10.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
            <div class="content">
                <h3>doctor no. 5 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            </div>
        </div>
        <div class="box">
            <img src="images/doctor-11.jpg" alt="">
            <div class="icons">
                <div class="fab fa-facebook"></div>
                <div class="fab fa-twitter"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div>
           <div class="content">
            <h3>doctor no. 6 </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Qui ipsum nisi, quos illum laborum quidem.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
           </div>
        </div>
    </div>
</section>
<!-- team section ends -->


<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html" ><i class="fas fa-angle-right"></i> home</a>
            <a href="about.html"><i class="fas fa-angle-right"></i>about</a>
            <a href="services.html"><i class="fas fa-angle-right"></i>services</a>
            <a href="appointment.html"><i class="fas fa-angle-right"></i>appointment</a>
            <a href="contact.html"><i class="fas fa-angle-right"></i>contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instegram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            <a href="#"><i class="fab fa-github"></i> github</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i> oumaima@gmail.com</a>
            <a href="#"><i class="fas fa-envelope"></i> aouane@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> morroco, kasbat el amine</a>
        </div>
    </div>
<div class="credit">created by <span>aouane oumaima</span> | all rights reserved!</div>
</section>

<!-- footer section ends -->

<script src="js/js.js"></script>
</body>
</html>

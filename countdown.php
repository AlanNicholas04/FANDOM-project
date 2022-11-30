<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php';
//header('Location: /home.php');?>
<!doctype html>
<html lang="en">
  <!-- Note: this is the template page, but something i was using needed this to be called index for some reason    TLDR: this is the template, home.php is the home page-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<link href="/style.css" rel="stylesheet" 
    
  </head>
  <body>

<div class="container">
<!--   START:: container -->
  <div class="row" id="top"> <!--   start:: top row -->
    <div class="col"><!--   start:: col -->
     <h1> <?php echo $siteName ?> </h1>
      <?php echo $mainNav ?>
    </div> <!--   end:: col -->
  </div> <!--   end:: top row -->
  
 <!--   end:: container -->

 <div class="row" id="content"> <!--   start:: top row -->
    <div class="col"><!--   start:: col -->
<br><br>
<h2 id="font">Countdown until first game</h2>
      <p id="demo"></p>

<script>
//countdown end date
var countDownDate = new Date("feb 4, 2023 11:11:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<img src='/images/taco.jpg'>";
  }
}, 1000);
</script>

      <br>
      <p>After working on making this game possible, i am excited to announce that the first game in this setting will be held on February 6th 2023. Make sure to be on thi spage once the countdown ends for a surprise :) </p>


<h4>Development timeline</h4>
      <p>In 2019 i got bored and started writing up a small idea for a fantasy gae setting.</p>
    </div> <!--   end:: col -->
  </div> <!--   end:: top row -->
  
 <!--   end:: container -->

 <div class="row" id="footer"> <!--   start:: top row -->
    <div class="col"><!--   start:: col -->
       <?php echo $footer ?>
    </div> <!--   end:: col -->
  </div> <!--   end:: top row -->
  
</div> <!--   end:: container -->

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
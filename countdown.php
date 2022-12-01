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

// Update the count down
var x = setInterval(function() {

  // find today's date
  var now = new Date().getTime();

  var distance = countDownDate - now;

  // Time calculations
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "<img src='/images/taco.jpg'>";
  }
}, 1000);
</script>

      <br>
      <p>After working on making this game possible, i am excited to announce that the first game in this setting will be held on February 6th 2023. Make sure to be on this spage once the countdown ends for a surprise :) </p>


<h4>Development timeline</h4>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Year:</th>
      <th scope="col">progress</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2019</th>
      <td>I got bored, and started writing the framework for the world setting. back then, this world setting looked incredibly different than it does now, and it was mostly just a lord of the rings rip off.</td>
    </tr>
    <tr>
      <th scope="row">2020</th>
      <td>During the peak of the covid 19 lockdown, i had some time to start thnking more about the direction the project would go in, and I did some much needed polishing to make the world more understandale. </td>
    </tr>
    <tr>
      <th scope="row">2021</th>
      <td>In 2021 i got a few friends to help me write parts of the story for the project, and we even tried to make this into a game on Roblox (we failed miserably at that though).</td>
    </tr>
    <th scope="row">2022</th>
      <td>In 2022 i added some of the final touches to the project, and decided for it to be a dungeons and dragons world setting instead of a game.</td>
    </tr>
        <th scope="row">2023</th>
      <td>In 2023 I will host the first dungeons and dragons game in this setting.</td>
    </tr>
  </tbody>
</table>
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
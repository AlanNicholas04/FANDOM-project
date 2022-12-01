<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php';?>
<!doctype html>
<html lang="en">
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
    <h4>Welcome to the elemental awakening wiki</h4>
      <p>Hello! thank you for taking the time out of your day to look at this webpage I made.</p>
    <h2>what is <div id="elemental_awakening">elemental awakening?</div></h2>
      <p>Elemental awakening is a small RPG (or role playing game) project that I have been writing for a few years. Elemental Awakning was originally supposed to be a game on Roblox, but some plans for that fell through so now its a D&D (or dungeons and dragons) campaign/world setting.</p>
<h2>My inspiration behind this project</h2>
      <p>I first started writing Elemental Awakening a few years ago when I got bored and wanted to play an RPG, but I realised that there werent any good RPGs out at the time. My main goal was to write a nice, back to basics RPG style story/game that wasnt polluted by a bunch of hidden politcal commentary that no one came there for, or something that was easy enough to understand without needing to watch fourteen movies, play all the games, and read the art books to understand the basic gist of the story.The setting in this project is based partly off of different mythologies from around the world. The ones that gave me the largest ammount of inspiration for this project was Greek mythology, and some bits of Catholic lore. The project also recieved a bit of inspiraton from elden ring, and jojo's bizzare adventure.</p>

      
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/chapel.jpg" class="d-block w-100" width="460" height="445">
    </div>
    <div class="carousel-item">
      <img src="/images/Statue.webp" class="d-block w-100" width="460" height="445">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      


<br><br>
      
<h4><div id=font>Tweet of the week</div></h4>
<!-- tweet embed starts here -->
      <blockquote class="twitter-tweet"><p lang="en" dir="ltr">For those of you who missed it… <br><br>(Part 1 of 2) <a href="https://t.co/Zc3ZRgkieP">pic.twitter.com/Zc3ZRgkieP</a></p>&mdash; Johnny Stanton (@johnnystantoniv) <a href="https://twitter.com/johnnystantoniv/status/1586856723058372609?ref_src=twsrc%5Etfw">October 30, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- tweet embed ends here -->



      

<h2>Copyright info</h2>
      <p>Feel free to use anything from my project that you'd like! just be sure to give me credit. You can contact me at 366554@guhsd.net for any questions you may have.</p>
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
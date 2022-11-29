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



      <table class="table">
  <thead>
    <tr>
      <th scope="col">Cities</th>
      <th scope="col">Population</th>
      <th scope="col">Leader</th>
      <th scope="col">Economic status</th>
      <th scope="col">City Age</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Emburg</th>
      <td>750,000</td>
      <td>Chariel</td>
      <td>Capitalist/free market</td>
      <td>300 years</td>
    </tr>
    <tr>
      <th scope="row">Aquitane</th>
      <td>400,000</td>
      <td>eliel</td>
      <td>Capitalist/free market</td>
      <td>450 years</td>
    </tr>
    <tr>
      <th scope="row">Zephyros</th>
      <td>600,00</td>
      <td>balel</td>
      <td>Command market</td>
      <td>325 years</td>
    </tr>
  </tbody>
</table>

<!-- Image starts here -->
      <img href="/images/wowza.jpg">
      
      <h5>Table expalanation</h5>
      <p>This table shows the population, Leader, and economic status of the major cities in the world setting. Lore-wise, emburg is older than zephyros, but it was rebuilt 300 years ago.</p>

<h3>Divine Heirarchy</h3>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Heirarchy</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Patriarch</th>
      <td>The patriarch is the most powerful of all of the elemental spirits. They typically act as the de facto leader of the gods.</td>
      
    </tr>
    <tr>
      <th scope="row">overseer</th>
      <td>an overseer is one of the major elemental spirits. after becoming an overseer, they not only control an element, but they aslo embody a concept.</td>

    </tr>
    <tr>
      <th scope="row">king</th>
      <td>A king is a lesser being that have been promoted to the position of a god. they typically work under an overseer, and act as the avatar of the overseer's will.</td>
     
    </tr>
     <tr>
      <th scope="row">muse</th>
      <td>A muse is a lesser elemental spirit that is immortal. they typically embody a small concept, or an item/place.</td>
     
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
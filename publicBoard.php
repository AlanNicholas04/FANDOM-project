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

      
      <h3>Fan Board</h3>
      <p>Welcome to the fan board! you can post your thoughts and opinions of my project on here, just please be sure to be respectful</p>
      <!-- Note: if you are reading this, it probably means that i never found out how to finish the public board page. it was a little too ambitious a task for me to take on by myself, especially with the limited expirience i have -->
      <br>

      <div class="row"> <!-- row3 starts here lol -->
    <!-- Might wanna work on this later, its a bit too ambitious-->
    <div class="col">
      <form action="/publicBoardRedirect.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="Name"><br>
  <label for="Message">Message:</label><br>
  <input type="text" id="Message" name="Message" value="Message"><br><br>
  <input type="submit" value="Submit">
        <br><br>
</form>
    </div>
    
    <div class="col">
      <!--write stuff here  <div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    The message board is temporarily closed
  </div>
</div> -->
    </div> 
    
    
    
  </div> <!-- row3 ends here lol -->

      
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
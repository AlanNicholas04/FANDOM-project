<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php';


if ($_GET){
$showData = "yes";
$fName = $_GET['fName'];
$lName = $_GET['lName'];
$reason = $_GET['reason'];
  
}else{
$showData = "no";
}
?>

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
    <h3>Contact form</h3>

<form action="redirectForm.php" method="post">
  what is your name? <br>
  <input type="text" name="fullName"> <br>
    reason for contact?<br>
  <select name="reason">
    <option value="question">Question</option>
    <option value="comment">comment</option>
  <br>
<input type="submit" value="send"> 
</form>


      
    </div> <!--   end:: col -->


 <div class="col p-2"> <!--start of new col-->
   
<?php

if ($showData == 'yes'){
  echo  "<h3>Form Data:</h3>";
  echo  "First Name: $fName";
  echo  "<br>";
  echo  "Last Name: $lName";
  echo  "<br>";
  echo  "Reason: $reason";
  echo  "<br>";
    
}
 ?>  
   <!--First name: <br>

   Last name: <br>

   Reason: <br> -->
   
    
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
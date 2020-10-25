<?php

session_start();
  $_SESSION['fname']= $_POST["fname"];
  $fname = $_SESSION["fname"];
  $_SESSION['lname'] = $_POST["lname"];
  $lname = $_SESSION["lname"];
  $_SESSION['email'] = $_POST["email"];
  $email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Page</title>
    <script src= http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
    <script src="js/script3.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Shirley's Album Shop</h1>
      <?php
      $file = "../album_info.txt"; // file path for i6 server so it can be changed in both assignments 8 & 9
      $lines = file($file);
      echo $fname." ". $lname.", please make your selections.";
      ?>
    <hr>

    <form name="order" onsubmit="return buyAlbum()" action = "confirm_page.php" method="post">
      <div class="first_row">

        <div class="album">
           <?php
           if ($lines[2] == 0){
             echo '<img src="out_of_stock.php"/>';
             echo "<br>".$lines[0]."- Price: ".$lines[3]."<br><br>";
             echo '<input type="hidden" id="btn1" name="b1" value="false">';
           }
           else{
             echo '<img src="album_covers/'.$lines[1].'"/>';
             echo "<br>".$lines[0]."- Price: ".$lines[3]."<br><br>";
             echo'<input type="button" class="button" name="b1" value="Order">';
             echo '<input type="hidden" id="btn1" name="btn1" value="false">';

           }
            ?>

       </div>

       <div class="album">
           <?php
           if ($lines[6] == 0){
             echo '<img src="out_of_stock.php"/>';
             echo "<br>".$lines[4]."- Price: ".$lines[7]."<br><br>";
             echo '<input type="hidden" id="btn1" name="b2" value="false">';
           }
           else{
             echo '<img src="album_covers/'. $lines[5].'"/>';
             echo "<br>".$lines[4]."- Price: ".$lines[7]."<br><br>";
             echo '  <input type="button" class="button" name="b2" value="Order">';
             echo ' <input type="hidden" id="btn2" name="btn2" value="false">';
          }

          ?>
        </div>
       <div class="album">
          <?php
          if ($lines[10] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[8]."- Price: ".$lines[11]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b3" value="false">';

          }
          else{
           echo '<img src="album_covers/'.$lines[9].'"/>';
           echo "<br>".$lines[8]."- Price: ".$lines[11]."<br><br>";
           echo '<input type="button" class="button" name="b3" value="Order">';
           echo '<input type="hidden" id="btn3" name="btn3" value="false">';
          }

         ?>
        </div>

        <div class="album">
          <?php
          if ($lines[14] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[12]."- Price: ".$lines[15]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b4" value="false">';

          }
          else{
           echo '<img src="album_covers/'.$lines[13].'"/>';
           echo "<br>".$lines[12]."- Price: ".$lines[15]."<br><br>";
           echo '<input type="button" class="button" name="b4" value="Order">';
           echo '<input type="hidden" id="btn4" name="btn4" value="false">';
          }
           ?>
        </div>

      </div>
      <div class="second_row">

        <div class="album">
          <?php
          if ($lines[18] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[16]."- Price: ".$lines[19]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b5" value="false">';

          }
          else{
           echo '<img src="album_covers/'.$lines[17].'"/>';
           echo "<br>".$lines[16]."- Price: ".$lines[19]."<br><br>";
           echo '<input type="button" class="button" name="b5" value="Order">';
           echo '<input type="hidden" id="btn5" name="btn5" value="false">';
          }
         ?>
        </div>

        <div class="album">
          <?php
          if ($lines[22] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[20]."- Price: ".$lines[23]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b6" value="false">';

          }
          else{
             echo '<img src="album_covers/'.$lines[21].'"/>';
             echo "<br>".$lines[20]."- Price: ".$lines[23]."<br><br>";
             echo '<input type="button" class="button" name="b6" value="Order">';
             echo '<input type="hidden" id="btn6" name="btn6" value="false">';
          }
         ?>
        </div>
        <div class="album">
          <?php
          if ($lines[26] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[24]."- Price: ".$lines[27]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b7" value="false">';

          }
          else{
            echo '<img src="album_covers/'.$lines[25].'"/>';
            echo "<br>".$lines[24]."- Price: ".$lines[27]."<br><br>";
            echo '<input type="button" class="button" name="b7" value="Order"> ';
            echo '<input type="hidden" id="btn7" name="btn7" value="false">';
          }
         ?>
        </div>
        <div class="album">
          <?php
          if ($lines[30] == 0){
            echo '<img src="out_of_stock.php"/>';
            echo "<br>".$lines[28]."- Price: ".$lines[31]."<br><br>";
            echo '<input type="hidden" id="btn1" name="b8" value="false">';

          }
          else{
            echo '<img src="album_covers/'.$lines[29].'"/>';
            echo "<br>".$lines[28]."- Price: ".$lines[31]."<br><br>";
            echo '<input type="button" class="button" name="b8" value="Order">';
            echo '<input type="hidden" id="btn8" name="btn8" value="false">';
          }
         ?>
       </div>
       </div>
       <br><br>
       <footer>
         <input id='submit'type="submit" name="submit" value="Submit">
       </footer>
      </form>
  </body>
</html>

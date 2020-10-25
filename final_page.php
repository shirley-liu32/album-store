<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

session_start();

file_put_contents('../album_info.txt', $_SESSION["file_info"]);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thank You Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script3.js"></script>
  </head>
  <body>
    <h1>Shirley's Album Shop <br> Customer Order Verification</h1>
    <hr>
    <?php
      echo "Thank you, ".$_SESSION["fname"]."!"."<br>Your order is on the way and a verification email
      has been sent to ". $_SESSION["email"];
      $to = $_SESSION["email"];
      $subject = "Shirley's Album Store: Order Confirmation";
      $message = 'Hello, '. $_SESSION["fname"]."\r\n".
      "Number of Album(s) Ordered: ". $_SESSION["count"]."\r\n"
      ."You spent a grand total of $". $_SESSION["total"]."."."\r\n".
      "Thank you for shopping with us!"."\r\n".
      "- Shirley's Album Store";

      mail($to, $subject, $message);
    ?>
  </body>
</html>

<?php
session_start();

$_SESSION['b1'] = $_POST["btn1"];
$b1 = $_SESSION['b1'];

$_SESSION['b2'] = $_POST["btn2"];
$b2 = $_SESSION['b2'];

$_SESSION['b3'] = $_POST["btn3"];
$b3 = $_SESSION['b3'];

$_SESSION['b4'] = $_POST["btn4"];
$b4 = $_SESSION['b4'];

$_SESSION['b5'] = $_POST["btn5"];
$b5 = $_SESSION['b5'];

$_SESSION['b6'] = $_POST["btn6"];
$b6 = $_SESSION['b6'];

$_SESSION['b7'] = $_POST["btn7"];
$b7 = $_SESSION['b7'];

$_SESSION['b8'] = $_POST["btn8"];
$b8 = $_SESSION['b8'];
$file = "../album_info.txt";
$lines = file($file);
$a1_price = $lines[3];
$a2_price = $lines[7];
$a3_price = $lines[11];
$a4_price = $lines[15];
$a5_price = $lines[19];
$a6_price = $lines[23];
$a7_price = $lines[27];
$a8_price = $lines[31];
$a1p = 0;
$a2p = 0;
$a3p = 0;
$a4p = 0;
$a5p = 0;
$a6p = 0;
$a7p = 0;
$a8p = 0;

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Order Confirmation Page</title>
    <script src= http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js></script>
    <script src="js/script3.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Shirley's Album Shop <br> Customer Order Verification</h1>
    <hr>
<?php
  echo "Thank you, ".$_SESSION["fname"].", for your order!"."<br>Here is your total - Please push 'Confirm' <br>";
 ?>
 <form name="confirm" action="final_page.php" method="post">


 <table align="center">
   <tr>
     <th></th>
     <th>Name</th>
     <th>Price</th>
   </tr>
   <tr>
     <?php
    $a1_stock = intval($lines[2]);
     if ($b1 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[1].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[0]. "</td>";
       echo "<td>". $lines[3] . "</td>";
       $a1_stock = intval($lines[2]) -1;
       $a1p = 1 * floatval($a1_price);
       $buy1 = 1;
     }
     if ($b1 == "false"){
       $a1_stock = intval($lines[2]);
       $a1p = 0 * floatval($a1_price);
       $buy1 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b2 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[5].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[4]. "</td>";
       echo "<td>". $lines[7] . "</td>";
       $a2_stock = intval($lines[6]) -1;
       $a2p = 1 * floatval($a2_price);
       $buy2 = 1;

     }
     if ($b2 == "false"){
       $a2_stock = intval($lines[6]);
       $a2p = 0 * floatval($a2_price);
       $buy2 = 0;

     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b3 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[9].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[8]. "</td>";
       echo "<td>". $lines[11] . "</td>";
       $a3_stock = intval($lines[10]) -1;
       $a3p = 1 * floatval($a3_price);
       $buy3 = 1;
     }
     if ($b3 == "false"){
       $a3_stock = intval($lines[10]);
       $a3p = 0 * floatval($a3_price);
       $buy3 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b4 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[13].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[12]. "</td>";
       echo "<td>". $lines[15] . "</td>";
       $a4_stock = intval($lines[14]) -1;
       $a4p = 1 * floatval($a4_price);
       $buy4 = 1;
     }
     if ($b4 == "false"){
       $a4_stock = intval($lines[14]);
       $a4p = 0 * floatval($a4_price);
       $buy4 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b5 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[17].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[16]. "</td>";
       echo "<td>". $lines[19] . "</td>";
       $a5_stock = intval($lines[18]) -1;
       $a5p = 1 * floatval($a5_price);
       $buy5 = 1;
     }
     if ($b5 == "false"){
       $a5_stock = intval($lines[18]);
       $a5p = 0 * floatval($a5_price);
       $buy5 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b6 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[21].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[20]. "</td>";
       echo "<td>". $lines[23] . "</td>";
       $a6_stock = intval($lines[22]) -1;
       $a6p = 1 * floatval($a6_price);
       $buy6 = 1;
     }
     if ($b6 == "false"){
       $a6_stock = intval($lines[22]);
       $a6p = 0 * floatval($a6_price);
       $buy6 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b7 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[25].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[24]. "</td>";
       echo "<td>". $lines[27] . "</td>";
       $a7_stock = intval($lines[26]) -1;
       $a7p = 1 * floatval($a7_price);
       $buy7 = 1;
     }
     if ($b7 == "false"){
       $a7_stock = intval($lines[26]);
       $a7p = 0 * floatval($a7_price);
       $buy7 = 0;
     }
     ?>
   </tr>
   <tr>
     <?php
     if ($b8 == "true"){
       echo "<td width= 15%>".'<img src="album_covers/'.$lines[29].'" width = 150 height =150/>'. "</td>";
       echo '<td>'. $lines[28]. "</td>";
       echo "<td>". $lines[31] . "</td>";
       $a8_stock = intval($lines[30]) -1;
       $a8p = 1 * floatval($a8_price);
       $buy8 = 1;
     }
     if ($b8 == "false"){
       $a8_stock = intval($lines[30]);
       $a8p = 0 * floatval($a8_price);
       $buy8 = 0;
     }
     ?>
   </tr>
   <tr>
     <td></td>
     <td>Subtotal</td>
     <td>
      <?php
       $subtotal = sprintf('%0.2f',($a1p + $a2p + $a3p + $a4p + $a5p + $a6p + $a7p + $a8p)) ;
       echo $subtotal;
      ?>
    </td>
   </tr>
   <tr>
     <td></td>
     <td>Sales Tax of 8.875%</td>
     <td>
       <?php
       $tax = sprintf('%0.2f',($subtotal * .08875));
       echo $tax;
        ?>
     </td>
   </tr>
   <tr>
     <td></td>
     <td>Grand Total</td>
     <td>
      <?php
        $total = sprintf('%0.2f',($subtotal + $tax));
        $_SESSION["total"] = $total;
        echo $total;
        $total_num_of_alb = $buy1 + $buy2 + $buy3 + $buy4 + $buy5 + $buy6 + $buy7 + $buy8;
        $_SESSION["count"] = $total_num_of_alb;
      ?>
    </td>
   </tr>


 </table>
 <input type="submit" id="confirm" name="confirm" value="Confirm">
  </form>
  </body>
  <?php


  $all_info =
    array("dont smile at me".PHP_EOL,"billie_album.jpg".PHP_EOL,$a1_stock.PHP_EOL,   $a1_price,
    "The Big Day".PHP_EOL,"chance_the_big_day.png".PHP_EOL,$a2_stock.PHP_EOL, $a2_price,
    "Because the Internet".PHP_EOL,"childish_gambino_album.jpg".PHP_EOL, $a3_stock.PHP_EOL,  $a3_price ,
    "Coming to You Live".PHP_EOL , "dpr_album.jpg".PHP_EOL , $a4_stock.PHP_EOL ,  $a4_price,
    "Flower Boy".PHP_EOL , "flower_boy_edit.jpg".PHP_EOL, $a5_stock.PHP_EOL ,  $a5_price ,
    "Blonde".PHP_EOL ,"frank_ocean_album.jpg".PHP_EOL , $a6_stock.PHP_EOL ,  $a6_price ,
    "Hyukoh".PHP_EOL ,"hyukoh_album.jpg".PHP_EOL ,$a7_stock.PHP_EOL , $a7_price,
    "Free Spirit".PHP_EOL , "khalid_album.jpg".PHP_EOL, $a8_stock.PHP_EOL , $a8_price
    );

  $_SESSION["file_info"] = $all_info;
  // file path for i6 server so it can be changed in both assignments 8 & 9



   ?>
</html>

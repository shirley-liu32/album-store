<?PHP
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Info</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script3.js">  </script>
  </head>
  <body>
    <h1>Shirley's Album Shop <br> Customer Info Page</h1>
    <hr>
    <form name="customer"action="order_page.php" method="post">
      First Name: <input type="text" name="fname" value="">  <br> <br>
      Last Name: <input type="text" name="lname" value=""> <br> <br>
      Email Address: <input type="email" name="email" value="" size="15"> <br><br>
      <input type="submit" name="submit" value="Continue to Order Page">
      <input type="hidden" name="submitted" value="true" />
      <input type="reset" name="reset" value="Reset">
    </form>
  </body>
</html>

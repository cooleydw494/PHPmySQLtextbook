<!DOCTYPE html>

<?php
//GRAB FORM VARIABLES
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
//DECLARE MY VARS
$totalqty = 0;
$totalamount = 0.00;
//DECLARE CONSTANTS
define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);
?>

<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2> 
    
    <?php
      $totalqty = $tireqty + $oilqty + $sparkqty;
      
      if ($totalqty == 0) 
      {
          echo "<p style='color: red'>YOU DID NOT ORDER ANYTHING</p>";
      }
      else
      {
          echo "<p>Order Processed at ".date('H:i, jS F Y')."</p>";
          echo "<p>Your Order is as follows:</p>";
          echo "<p>".htmlspecialchars($tireqty)." tires</p>";
          echo "<p>".htmlspecialchars($oilqty)." bottles of oil</p>";
          echo "<p>".htmlspecialchars($sparkqty)." spark plugs</p>";
          echo "<br /><p>Items ordered: ".$totalqty."</p>";
          $totalamount = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
          echo "<p>Subtotal: ".number_format($totalamount,2)."</p>";
          $withtax = $totalamount * 1.10;
          echo "<p>Total Price with tax: ".number_format($withtax,2)."</p>";
          echo 'isset($tireqty)'.isset($tireqty).'<br />';
          echo 'empty($tireqty)'.empty($tireqty).'<br />';
          echo 'isset($nothing)'.isset($nothing).'<br />';
          echo 'empty($nothing)'.empty($nothing).'<br />';
      }
      ?>
      
  </body>
</html>

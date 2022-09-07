<html>
 <head>
  <title>Header</title>
 </head>
 <body>
 <?php 
   while (list($var,$value) = each ($_SERVER)) {
      echo "<h1>$var</h1> <p>$value</p>";
   }

?>
 </body>
</html>

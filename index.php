<html>
 <head>
  <title>Header</title>
 </head>
 <body>
 <?php 
   foreach ($_SERVER as $i => $arg) {
      echo "<h1>$i</h1> <p>$arg</p>";
   }

?>
 </body>
</html>

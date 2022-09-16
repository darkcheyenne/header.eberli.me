<html>
 <head>
  <title>Header</title>
  <script async defer data-website-id="d81e9724-76ad-489f-a60e-d965d8c39339" src="https://umami.eberli.me/umami.js"></script>
 </head>
 <body>
 <?php 
   foreach ($_SERVER as $i => $arg) {
      echo "<h1>$i</h1> <p>$arg</p>";
   }

?>
 </body>
</html>

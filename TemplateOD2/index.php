<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php
         require("variables.php");
         $num = 0;
         foreach($Fruitsoorten as $value){
            $num++;
            echo "<p>Fruitsoort: $num: $value, <br> </p>";
         }
      ?>
   </body>
</html>
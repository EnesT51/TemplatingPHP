<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Lab 2 - Includes en require</title>
</head>
<body>
  <!-- laad hier via php je header in (vanuit je includes map) -->
  <header>
    <?php
      include("includes/header.php");
    ?>
  </header>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php

    if($_GET['page']){
      $page = $_GET['page'];
      $display = 'pages/'.$page.'.php';
      include $display;
    }else{
      
      echo "<h1> Welcome to Land Information</h1><br>";
      echo "<img src=images/Worldmap.png>";
    }
    
  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <section id="footer">
    <?php
      include("includes/footer.php");
    ?>
  </section>
  
</body>
</html>

<!-- By: Brian Duke -->
<!-- Date: 9/4/24 -->
<!-- Description: PHP Array Lab 2 -->

<html>
  <head>
    <title>PHP Arrays</title>
    <style>
      body {
        background-color: lightcyan;
      }
      h1 {
      color: darkblue;
      text-align: center;
      }
      p {
        color: blue;
      }
    </style>
  </head>
  <body>
    <?php echo '<h1>Creating Arrays with PHP</h1>'; ?>
    <?php echo '<p>Brian Duke</p>'; ?>
    <?php $bestBMWs = array("2012 BMW M3", "2018 BMW M4 Competition", "2018 BMW M2 Competition", "2003 BMW M3 GTR", "2024 BMW M2", "2024 BMW M3 Touring", "1991 BMW M3"); ?>
    <?php echo $bestBMWs[0] .'<br>'; ?>
    <?php echo $bestBMWs[1] .'<br>'; ?>
    <?php echo $bestBMWs[2] .'<br>'; ?>
    <?php echo $bestBMWs[3] .'<br>'; ?>
    <?php echo $bestBMWs[4] .'<br>'; ?>
    <?php echo $bestBMWs[5] .'<br>'; ?>
    <?php echo $bestBMWs[6]; ?>

</html>
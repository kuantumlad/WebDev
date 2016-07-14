<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../style/styles.css">
   <script src="styles/style.js"> </script>

  <title>DVCS EG1</title>
</head>

<?php include '../includes/header.php';?>

<body>

<h1> Simulation parameters </h1>

<table>

<?php
  $f = fopen("testdoc.txt","r");
  while(! feof($f)){
    echo fgets($file). "<br />";
  }
  fclose($f);

?>

</body>

<?php include '../includes/footer.php';?>


</html>

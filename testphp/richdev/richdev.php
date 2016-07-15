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

<h1 id="TSD"> Trigger System Development </h1>
<p> Trigger developement is currently underway </p>

<h1 id ="TSP"> Trigger Simulation Parameters </h1>
<p> Below are the parameters used to run the simulation for the
current trigger analysis.
</p>

<table>
<?php
  $f = fopen("dvcs.txt","r");
  while( ! feof($f)  )
  {
    echo "<tr>";
    echo "<td>" . fgets($f) . "</td>";
    echo "</tr>";
  }
  fclose($f);
?>
</table>

</body>

<?php include '../includes/footer.php';?>


</html>

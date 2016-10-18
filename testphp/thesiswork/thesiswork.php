<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../style/styles.css">
   <script src="styles/style.js"> </script>

  <title>Thesis Work</title>
</head>

<?php include '../includes/header.php';?>

<body>

<h1 id = "CS" >Current Status </h1>

Developement and implementation of exclusivity cuts as
prescribed by the dvcs_note_v30 document.

<h1 id = "CS" >Completed Items </h1>

<?php include '../includes/flowdiagram.php';?>

Stage 1 Cuts include :
<ul id="Cuts">
  <li>Electron</li>
  <ul>
    <li>Negative Charge</li>
    <li>Momentum Cut </li>
    <li>Energy deposited in the Inner Calorimeter</li>
    <li>Energy deposited in the Outer Calorimeter</li>
    <li>Cherenkov Signal Time Cut</li>
    <li>Event Vertez Cut</li>
    <li>UVW Place Cuts</li>
    <li>IC Shadow Cut</li>
  </ul>
  <li>Proton</li>
  <ul>
    <li>Positive Charge</li>
    <li>Momentum Cut</li>
    <li>Delta Beta Cut</li>
    <li>Energy deposited in the Inner Calorimeter</li>
    <li>Energy deposited in the Outer Calorimeter</li>
    <li>Event Vertez Cut</li>
  </ul>
  <li>Photon</li>
  <ul>
    <li>Neutral Charge</li>
    <li>IC Fiducial Cut</li>
    <li>Moeller Electron Cut</li>
    <li>Beta Cut</li>
    <li>EC Energy Deposited Cut</li>
    <li> UVW Place Cut</li>
  </ul>
</ul>
  
  
    
    


</body>

<?php include '../includes/footer.php';?>


</html>

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

  <?php 

     $dir = 'img/';
     $file_display = array( 'jpeg', 'jpg', 'png', 'gif' );

     if( file_exists($dir) == false ){
     echo 'Directory''. $dir. ' 'not found';
     } else {
     $dir_contents = scandir($dir);

     foreach ($dir_contents as $file){
     $file_type = strtolower(end(explode('.',$file)));

     if( $file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {

     echo '<img src="'. $dir. '/'. $file . '"alt="'.$file.'"/>';
     }
     }
     }


     ?>

</body>

<?php include '../includes/footer.php';?>


</html>

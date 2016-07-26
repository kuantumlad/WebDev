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
<p id="TSDp"> Trigger developement is currently underway </p>

<h1 id="TSP"> Trigger Simulation Parameters </h1>
<p id="TSPp"> Below are the parameters used to run the simulation for the
current trigger analysis.
</p>

<table id="Table">
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

<h1 id="MC_FILEIO"> Analyzing MC .dat.evio Files </h1>
<p id="MC_FILEIOp"> To begin understanding CLAS12 analysis of evio files visit the
site SITE NAME. For the working version of gemc the evio files do not
contain simulated raw DAQ output. Thus reading the evio at this state
will not reproduce the branches that correspond to the crate numbers
for each event (running the code will leave you with a long list of
event numbers).

To start we covers the basic concepts of the CLAS/IO library. The
CLAS/IO library is a java packakege meant to handle input and output
of common CLAS data formats such as BOS?FPACK, EVIO (new for CLAS12),
and iG5 which is a common data mining format. One can store
information for each event in a specific detector by using a data
format known as a "bank." The bank is definitions are stored in
extensive markup language (XML) files. Each file can contain multiple
bank definitions for a single detector. This is useful to seperate
banks that handle raw generated and reconstructed events. One may
divide each bank into sections which are identified with an XML
attribute called "tag." Within the section varaibles are identified
with a num attribute starting with 0 in the section tag. These banks
can be created to handle user specific requirements. 

INSERT EXAMPLE CODE

Set up the environment by typing source
/group/clas12/environment_java_8.csh. This will give access to evio
files via the command line.

To see the banks associated with the evio output files it is enough to
type: evio_dump -i dvcsgen150.dat.evio in the command line. The banks
are initialized with two columns nrows and ncols. Each bank varies
between events because it depends on the whether or not a
detector recorded a specific event. (is this true). 
</p>

</body>

<?php include '../includes/footer.php';?>


</html>

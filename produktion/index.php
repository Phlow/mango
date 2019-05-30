<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head profile="http://gmpg.org/xfn/11">

<title>Index</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="follow" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="language" content="en-us" />

<link rel="stylesheet" href="http://media.phlow.de/css/phlow_framework.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://media.phlow.de/css/phlow_typo.css" type="text/css" media="screen" />

</head>
<body>



<div class="container_12">

<div id="header" class="grid_12">

	<div id="logo" class="top"><a style="border: 0;" name="top" title="Phlow Logo" href="http://phlow.de/"><img src="http://images.phlow.de/phlow/phlow-logo-142x51.png" width="142" height="51" alt="Phlow Logo" title="Phlow Logo" /></a></div>


</div><!-- /grid_12 -->




	<div class="grid_12">


<?php
// zeigt alle Dateien und Ordner an.
$dir = @opendir("."); //aktuelles Verzeichnis öffnen
$array = array();
$array_dirs = array();

 while( $file = @readdir($dir) )
 {

   //Filtert jetzt auch alle .htaccess und index.php
   if( $file != '.' && $file != '..' && $file !=".htaccess" && $file !="index.php" )
   {
     if( is_dir($file) ) {
        array_push($array_dirs, $file);
     } else {
        array_push($array, $file);
     }
  }
 }

@closedir($dir);

natcasesort($array);
natcasesort($array_dirs);

// gibt alle Ordner aus



echo "<h2>Verzeichnisse</h2><ul>\n";

while($file = array_shift($array_dirs) )
 {
 echo "<li><b><a href=\"".$file."\" target=\"_top\" title=\"".$file."\">".$file."</a></b></li>\n";
 }
echo "</ul><br /><br />\n";


// gibt alle Files aus ?>

<h2>Data</h2>

<ul style="margin-left: 0px;">

<?php while($file = array_shift($array) )
 {
 echo '<li style="list-style: none;"><a href=' .$file. ' target=\"_top\" title=\"".$file."\">'.$file.'</a></li>';
 } ?>


		</ul>
	</div><!-- /grid_12 -->


</div><!-- /container_12 -->



<script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script>
</body>
</html>

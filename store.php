<?php
$myfile = fopen("location.txt", "w");
$txt = "latitude : " . $_GET["lat"] . "\nlongitude : " . $_GET["long"];

fwrite($myfile, $txt);

fclose($myfile);

?>

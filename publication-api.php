<?php
$homepage = file_get_contents('https://www.ckartisan.com/api/publication');
//$homepage = "{ 'data' : ".$homepage." } ";
echo $homepage;
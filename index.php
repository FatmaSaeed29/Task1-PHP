<?php

foreach( range('A', 'Z') as $elements) 
{
      
echo $elements . ", " ;

}
echo "<br>";


$str = 'r';
// echo "<br";
echo "Current Letter Is " . " " . $str . " " . "The Next Letter Is" . " " . ++$str . "<br>";

echo "___________________________________" . "<br>";

$link = "https://ieee-bub.com/about.php";
echo "The Link Is : " . " " . $link . "<br>";
$ex = explode("/" ,$link);
echo "<br>" . "The Page Name Is : " . " " . end($ex);




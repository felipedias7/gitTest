<?php 
require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadFromUrl('https://wwwapps.ups.com/WebTracking/processInputRequest?HTMLVersion=5.0&loc=en_US&Requester=UPSHome&tracknum=1Z29994X0340447519
&AgreeToTermsAndConditions=yes&ignore=&track.x=24&track.y=14/trackdetails');
$html = $dom->outerHtml;

// or
// $dom->loadFromUrl('https://wwwapps.ups.com/WebTracking/processInputRequest?HTMLVersion=5.0&loc=en_US&Requester=UPSHome&tracknum=1Z29994X0340447519
// &AgreeToTermsAndConditions=yes&ignore=&track.x=24&track.y=14/trackdetails');
// $html = $dom->outerHtml; // same result as the first example

echo $html;

?>
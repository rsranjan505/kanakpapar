<?php 

include "app/config.php";

$userBrowser = $_SERVER['HTTP_ACCEPT']; 
$browser_t = "public";


//Define Global Variable
$domain="http://kanakpapar.com";
$contact_number="(+91) 887-779-2193";   
$whatsapp="+918877792193";
$address="Central Bank Building, Jadhuaa Bagh Tola, Hajipur Vaishali(Bihar) PIN - 844102";
$email="info@kanakpapar.com";
$contact_email="contact@kanakpapar.com";
$facebook="";
$instagram="";
$twitter="";
$author="KANAKPAPAR.COM";




//defina main index file below from variables

include $browser_t.'/index.php';


?>


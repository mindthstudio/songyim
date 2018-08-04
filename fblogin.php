<?php 

print_r( $_GET);
$access_token = $_GET['access_token'];
//redirect("http://songyim.eventhive.in.th/index.php/Signin/fbsignin?");

$url  = "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token=$access_token";
$content = file_get_contents($url);

echo "$url";
echo "<br>";

echo $content;

?>
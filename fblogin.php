<?php 

$access_token = $_GET['code'];
//redirect("http://songyim.eventhive.in.th/index.php/Signin/fbsignin?");

$url  = "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token=$access_token";
$content = file_get_contents($url);

echo "<pre>";
print_r($content);
echo "</pre>";

?>
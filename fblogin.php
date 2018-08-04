<?php 

$access_token $_GET['code'];
//redirect("http://songyim.eventhive.in.th/index.php/Signin/fbsignin?");

$url  = "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token=$access_token";
$curl = curl_init($url);
$content = curl_exec($curl);

echo "<pre>";
print_r($count);
echo "</pre>";

?>
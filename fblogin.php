<?php 

echo "PHP_SELF = ".$_SERVER['PHP_SELF'] . "<br>";
echo "REQUEST_URI = ".$_SERVER['REQUEST_URI'] . "<br>";
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
echo "$actual_link<br>";
echo "prase = " . sparse_url($actual_link, PHP_URL_FRAGMENT);

// $myurl = $_SERVER['REQUEST_URI'];

// $parse = parse_url($myurl, PHP_URL_FRAGMENT);

// echo "<pre>";
// print_r($prase);
// echo "</pre>";

// $access_token = $_GET['access_token'];

//redirect("http://songyim.eventhive.in.th/index.php/Signin/fbsignin?");

// $url  = "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token=$access_token";
// $content = file_get_contents($url);

// echo "$url";
// echo "<br>";

// echo $content;

?>
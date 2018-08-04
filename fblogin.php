<?php 


// $myurl = $_SERVER['REQUEST_URI'];

// $parse = parse_url($myurl, PHP_URL_FRAGMENT);


// $url=getCurrentURL();
// var_dump(parse_url($url));
// var_dump(parse_url($url, PHP_URL_SCHEME));
// var_dump(parse_url($url, PHP_URL_USER));
// var_dump(parse_url($url, PHP_URL_PASS));
// var_dump(parse_url($url, PHP_URL_HOST));
// var_dump(parse_url($url, PHP_URL_PORT));
// var_dump(parse_url($url, PHP_URL_PATH));
// var_dump(parse_url($url, PHP_URL_QUERY));
// var_dump(parse_url($url, PHP_URL_FRAGMENT));

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// $access_token = $_GET['access_token'];

//redirect("http://songyim.eventhive.in.th/index.php/Signin/fbsignin?");

// $url  = "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token=$access_token";
// $content = file_get_contents($url);

// echo "$url";
// echo "<br>";

// echo $content;

// function getCurrentURL()
// {
//     //$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false ? 'http' : 'https';
//     $host = $_SERVER['HTTP_HOST'];
//     $script = $_SERVER['SCRIPT_NAME'];
//     $params = $_SERVER['QUERY_STRING'] == '' ? '' : '?' . $_SERVER['QUERY_STRING'];

//     return 'https://' . $host . $script . $params;
// }

$dir = dirname(__FILE__);
echo "<p>Full path to this dir: " . $dir . "</p>";
echo "<p>Full path to a .htpasswd file in this dir: " . $dir . "/.htpasswd" . "</p>";

?>
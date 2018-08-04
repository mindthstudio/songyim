<?php 

echo "listen = ".getCurrentURL();

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

function getCurrentURL()
{
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false ? 'http' : 'https';
    $host = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $params = $_SERVER['QUERY_STRING'] == '' ? '' : '?' . $_SERVER['QUERY_STRING'];

    return $protocol . '://' . $host . $script . $params;
}

?>
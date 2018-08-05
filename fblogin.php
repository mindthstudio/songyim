<?php 


// $myurl = $_SERVER['REQUEST_URI'];

// $parse = parse_url($myurl, PHP_URL_FRAGMENT);

// $indicesServer = array('PHP_SELF', 
// 'argv', 
// 'argc', 
// 'GATEWAY_INTERFACE', 
// 'SERVER_ADDR', 
// 'SERVER_NAME', 
// 'SERVER_SOFTWARE', 
// 'SERVER_PROTOCOL', 
// 'REQUEST_METHOD', 
// 'REQUEST_TIME', 
// 'REQUEST_TIME_FLOAT', 
// 'QUERY_STRING', 
// 'DOCUMENT_ROOT', 
// 'HTTP_ACCEPT', 
// 'HTTP_ACCEPT_CHARSET', 
// 'HTTP_ACCEPT_ENCODING', 
// 'HTTP_ACCEPT_LANGUAGE', 
// 'HTTP_CONNECTION', 
// 'HTTP_HOST', 
// 'HTTP_REFERER', 
// 'HTTP_USER_AGENT', 
// 'HTTPS', 
// 'REMOTE_ADDR', 
// 'REMOTE_HOST', 
// 'REMOTE_PORT', 
// 'REMOTE_USER', 
// 'REDIRECT_REMOTE_USER', 
// 'SCRIPT_FILENAME', 
// 'SERVER_ADMIN', 
// 'SERVER_PORT', 
// 'SERVER_SIGNATURE', 
// 'PATH_TRANSLATED', 
// 'SCRIPT_NAME', 
// 'REQUEST_URI', 
// 'PHP_AUTH_DIGEST', 
// 'PHP_AUTH_USER', 
// 'PHP_AUTH_PW', 
// 'AUTH_TYPE', 
// 'PATH_INFO', 
// 'ORIG_PATH_INFO') ; 

// echo '<table cellpadding="10">' ; 
// foreach ($indicesServer as $arg) { 
//     if (isset($_SERVER[$arg])) { 
//         echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
//     } 
//     else { 
//         echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
//     } 
// } 
// echo '</table>' ; 
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

// $dir = dirname(__FILE__);
// echo "<p>Full path to this dir: " . $dir . "</p>";
// echo "<p>Full path to a .htpasswd file in this dir: " . $dir . "/.htpasswd" . "</p>";

?>

<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	console.log(window.location.href);

	$(() => {

		var type = window.location.hash.substr(1);

		var url_string = window.location.href.replace("#","&"); //window.location.href
		var url = new URL(url_string);
		var access_token = url.searchParams.get("access_token");

		$.get( "https://graph.facebook.com/v3.1/me?fields=id%2Cname&access_token="+access_token, function( data ) {
		  console.log(data);

		  	$.get( "http://songyim.eventhive.in.th/index.php/Api/verifyFacebookId?id="+data.id+"&name="+data.name+"&token="+access_token, function( data ) {
			  	console.log(data);
			});
		});
	});
</script>
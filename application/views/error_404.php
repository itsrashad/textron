<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>404 Error Page</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>

<p align="center">

<h1>Error 404</h1><br>Page Not Found

<p>

<?php

$ip = getenv ("REMOTE_ADDR");

$requri = getenv ("REQUEST_URI");

$servname = getenv ("SERVER_NAME");

$combine = $ip . " tried to load " . $servname . $requri ;

$httpref = getenv ("HTTP_REFERER");

$httpagent = getenv ("HTTP_USER_AGENT");

$today = date("D M j Y g:i:s a T");

$note = "You are in a wrong page!" ;

$message = "$today \n

<br>

$combine <br> \n

User Agent = $httpagent \n

<h2> $note </h2>\n

<br> $httpref ";

/*$message2 = "$today \n

$combine \n

User Agent = $httpagent \n

$note \n

$httpref ";

$to = "error@yourdomain.com";

$subject = "yourdomain Error Page";

$from = "From: fake@yourdomain.com\r\n";

mail($to, $subject, $message2, $from);*/

echo $message;
$base_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
$base_url .= '://'. $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

?>

Visit our <a href="<?php echo $base_url;?>" >Home Page</a>

</body>
</html>

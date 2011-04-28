<?php
$api_key = '58df56e1cbdfb79da4f5804e7ab619f2';
$secret = '1d84ce1f1ca3257676c0c7a5b40108d6';
$url_callback = 'http://brn.comxa.com/lastfm.php';

if (isset($_GET['token'])) {
	$token = $_GET['token'];
	echo $token.'<br />';
}

$api_sig = md5("api_key".$api_key."methodauth.getSessiontoken".$token.$secret);

echo '<a href="http://www.last.fm/api/auth/?api_key='.$api_key.'&cb='.$url_callback.'">login</a>';
echo '<br />';
echo '<a href="http://ws.audioscrobbler.com/2.0/?method=auth.getSession&api_key='.$api_key.'&token='.$token.'&api_sig='.$api_sig.'">getsession</a>';
?>

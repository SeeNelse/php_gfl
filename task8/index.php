<?php


// $link = curl_init("https://www.google.com/xhtml?q=Hello+world!");
// curl_setopt($link, CURLOPT_RETURNTRANSFER, 1);
// $getLink = curl_exec($link);
// $header  = curl_getinfo($link);

// echo '<pre>'; echo var_export($header); echo'</pre>';
// $header[] = $content;


$link = "www.google.com/xhtml?q=Hello+world";

curl($link);

function curl($url, $postdata='', $cookie='', $proxy='')
{

	$ch = curl_init( $url );
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   // возвращает веб-страницу
	curl_setopt($ch, CURLOPT_HEADER, 0);           // возвращает заголовки
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.205 Safari/534.16");  // useragent
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);        // таймаут ответа

	$content = curl_exec( $ch );
	// $err     = curl_errno( $ch );
	// $errmsg  = curl_error( $ch );
	// $header  = curl_getinfo( $ch );
	curl_close( $ch );

	$header['errno']   = $err;
	$header['errmsg']  = $errmsg;
	// $header['content'] = $content; 
	return $header;
}
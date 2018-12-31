<?php

/*
Questo piccolo programma, richiamato da solo, funziona autonomamente e visualizza
sullo schermo tutte le informazioni contenute nell'array $_SERVER[''].

L'output è simile al seguente

PHP_SELF	/ip.php
argv	-
argc	-
GATEWAY_INTERFACE	CGI/1.1
SERVER_ADDR	138.2.8.2
SERVER_NAME	x.altervista.org
SERVER_SOFTWARE	Apache
SERVER_PROTOCOL	HTTP/1.1
REQUEST_METHOD	GET
REQUEST_TIME	1474189953
REQUEST_TIME_FLOAT	1474189953.3054
QUERY_STRING	
DOCUMENT_ROOT	/var/www/html
HTTP_ACCEPT	text/html,application/xhtml+xml,application/xml;
HTTP_ACCEPT_CHARSET	-
HTTP_ACCEPT_ENCODING	gzip
HTTP_ACCEPT_LANGUAGE	it-IT,it;q=0.8,en-US;q=0.5,en;q=0.3
HTTP_CONNECTION	Keep-Alive
HTTP_HOST	x.altervista.org
HTTP_REFERER	-
HTTP_USER_AGENT	Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0
HTTPS	-
REMOTE_ADDR	18.14.12.13
REMOTE_HOST	-
REMOTE_PORT	371
REMOTE_USER	-
REDIRECT_REMOTE_USER	-
SCRIPT_FILENAME	/membri/x/ip.php
SERVER_ADMIN	info@altervista.org
SERVER_PORT	80
SERVER_SIGNATURE	
PATH_TRANSLATED	-
SCRIPT_NAME	/ip.php
REQUEST_URI	/ip.php
PHP_AUTH_DIGEST	-
PHP_AUTH_USER	-
PHP_AUTH_PW	-
AUTH_TYPE	-
PATH_INFO	-
ORIG_PATH_INFO	/ip.php
*/

$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) 
{
    if (isset($_SERVER[$arg]))
    {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else
    {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;

//Oppure... più lungo ma semplice...

echo "ME:<br>";
echo "SERVER_ADDR: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "SERVER_NAME: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "SERVER_SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "SERVER_PROTOCOL: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo "SERVER_PORT: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "<br>";
echo "REQUEST:<br>";
echo "REQUEST_METHOD:" . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "QUERY_STRING:" . $_SERVER['QUERY_STRING']. "<br>";
echo "<br>";
echo "YOU:<br>";
echo "REMOTE_ADDR: " . $_SERVER['REMOTE_ADDR']. "<br>";
echo "REMOTE_HOST: " . $_SERVER['REMOTE_HOST']. "<br>";
echo "REMOTE_PORT: " . $_SERVER['REMOTE_PORT']. "<br>";
echo "REMOTE_USER: " . $_SERVER['REMOTE_USER']. "<br>";
echo "HTTP_USER_AGENT: " . $_SERVER['HTTP_USER_AGENT']. "<br>";
echo "HTTP_ACCEPT_LANGUAGE: " . $_SERVER['HTTP_ACCEPT_LANGUAGE']. "<br>";

?>

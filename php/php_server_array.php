<?php
phpinfo(32);
?>


<?php
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

<?php
    $ip = file_get_contents('https://api.ipify.org');
    echo "My public IP address is: " . $ip;
?>

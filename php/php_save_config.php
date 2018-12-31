------config.php:------
return array(
 'var1'=> 'value1',
 'var2'=> 'value2',
);



------test.php:------
$config = include 'config.php';
$config['var2']= 'value3';
file_put_contents('config.php', '<?php return ' . var_export($config, true) . ';');




------Updated config.php now contains the following:------
return array(
 'var1'=> 'value1',
 'var2'=> 'value3',
);

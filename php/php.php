Credit titoli ascii: http://patorjk.com/software/taag/#p=display&f=Big&t=Cookies%0A



  __  __       _   _                          _   _          
 |  \/  |     | | | |                        | | (_)         
 | \  / | __ _| |_| |__   ___ _ __ ___   __ _| |_ _  ___ ___ 
 | |\/| |/ _` | __| '_ \ / _ \ '_ ` _ \ / _` | __| |/ __/ __|
 | |  | | (_| | |_| | | |  __/ | | | | | (_| | |_| | (__\__ \
 |_|  |_|\__,_|\__|_| |_|\___|_| |_| |_|\__,_|\__|_|\___|___/
                                                             
//OPERATORI:
$a ** $b 	Exponentiation
$a % $b 	Modulo
$a & $b		And
$a | $b		Or (inclusive or)
$a ^ $b		Xor (exclusive or)
~ $a		Not
$a << $b 	Shift left
$a >> $b 	Shift right
$a == $b 	Equal
$a === $b 	Identical
$a != $b 	Not equal
$a !== $b 	Not identical
$a < $b 	Less than
$a > $b 	Greater than
$a <= $b 	Less than or equal to 
$a >= $b 	Greater than or equal to
$a++	 	Post-increment
++$a 		Pre-increment
--$a 		Pre-decrement
$a-- 		Post-decrement

rand($min, $max);  //Random number	

  _                 _      
 | |               (_)     
 | |     ___   __ _ _  ___ 
 | |    / _ \ / _` | |/ __|
 | |___| (_) | (_| | | (__ 
 |______\___/ \__, |_|\___|
               __/ |       
              |___/        

//LOGICAL OPERATORS:
$a and $b   And 	TRUE if both $a and $b are TRUE.
$a or $b 	O	 	TRUE if either $a or $b is TRUE.
$a xor $b 	Xor 	TRUE if either $a or $b is TRUE, but not both.
! $a 		Not		TRUE if $a is not TRUE.
$a && $b 	And 	TRUE if both $a and $b are TRUE.
$a || $b 	Or 		TRUE if either $a or $b is TRUE.

//GESTIONE ERRORI
//La chiocciolina all'inizio di una riga, fa ignorare qualsiasi errore
//http://php.net/manual/en/language.operators.errorcontrol.php
$my_file = @file ('non_existent_file') or die ("Failed opening file: error was '$php_errormsg'");
$value = @$cache[$key];

/*

\n 	linefeed (LF or 0x0A (10) in ASCII)
\r 	carriage return (CR or 0x0D (13) in ASCII)
\t 	horizontal tab (HT or 0x09 (9) in ASCII)
\\ 	backslash
\$ 	dollar sign
\" 	double-quote

*/



  _____                  _          
 |  __ \                (_)         
 | |__) |___  __ _ _   _ _ _ __ ___ 
 |  _  // _ \/ _` | | | | | '__/ _ \
 | | \ \  __/ (_| | |_| | | | |  __/
 |_|  \_\___|\__, |\__,_|_|_|  \___|
                | |                 
                |_|                 
<?php
require('another.php');
require_once('config.php');


   __           
  / _|          
 | |_ ___  _ __ 
 |  _/ _ \| '__|
 | || (_) | |   
 |_| \___/|_|   

for ($i = 1; $i <= 10; $i++) {
    echo rand(100,150) . '<br>';
}	


     /\                         
    /  \   _ __ _ __ __ _ _   _ 
   / /\ \ | '__| '__/ _` | | | |
  / ____ \| |  | | | (_| | |_| |
 /_/    \_\_|  |_|  \__,_|\__, |
                           __/ |
                          |___/ 

foreach ($array as $elemento_array) {
	$elemento_array=1;
}

foreach($_POST as $key => $value) {
  echo "POST parameter '$key' has '$value'";
}



   _____ ______ _______          _____   ____   _____ _______ 
  / ____|  ____|__   __|        |  __ \ / __ \ / ____|__   __|
 | |  __| |__     | |      ___  | |__) | |  | | (___    | |   
 | | |_ |  __|    | |     / _ \ |  ___/| |  | |\___ \   | |   
 | |__| | |____   | |    |  __/ | |    | |__| |____) |  | |   
  \_____|______|  |_|     \___| |_|     \____/|_____/   |_|   
                                                              
echo "Hai passato l'elemento POST id uguale a: " . $_POST['id'] ;
echo "Hai passato l'elemento GET quantity uguale a: " . $_GET['quantity'] ;


	


   _____            _    _           
  / ____|          | |  (_)          
 | |     ___   ___ | | ___  ___  ___ 
 | |    / _ \ / _ \| |/ / |/ _ \/ __|
 | |___| (_) | (_) |   <| |  __/\__ \
  \_____\___/ \___/|_|\_\_|\___||___/
                                     
//Imposto un cookie...
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//Leggo un cookie...
$cookie_name = "user";
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
	
//Elimino un cookie...
$cookie_name = "user";
setcookie($cookie_name, "", time() - 3600);	//Imposto una scadenza negativa (1 ora fa)



   _____         _ _       _     
  / ____|       (_) |     | |    
 | (_____      ___| |_ ___| |__  
  \___ \ \ /\ / / | __/ __| '_ \ 
  ____) \ V  V /| | || (__| | | |
 |_____/ \_/\_/ |_|\__\___|_| |_|
                                 
switch ($cibo) {
	case "Pasta":
    	$contenuto = "Carboidrati";
        break;
    case "Vino":
        $contenuto = "Alcool";
        break;
    default:
        $contenuto = "Sconosciuto";
}



  _____        _       
 |  __ \      | |      
 | |  | | __ _| |_ ___ 
 | |  | |/ _` | __/ _ \
 | |__| | (_| | ||  __/
 |_____/ \__,_|\__\___|
                       
$now = date("d-m-Y H:i:s");
echo $now;



  _  __ 
 (_)/ _|
  _| |_ 
 | |  _|
 | | |  
 |_|_|  
        
        
if ($numero < 12) {
    echo "Have a good morning!";
} elseif ($numero = 12) {
    echo "Have a good lunch!";
} else {
    echo "Have a good afternoon!";
}




  _                    __            _       _     
 | |                  / /           | |     | |    
 | |_ _ __ _   _     / /    ___ __ _| |_ ___| |__  
 | __| '__| | | |   / /    / __/ _` | __/ __| '_ \ 
 | |_| |  | |_| |  / /    | (_| (_| | || (__| | | |
  \__|_|   \__, | /_/      \___\__,_|\__\___|_| |_|
            __/ |                                  
           |___/                                   

try { 
	print "Try block\n";
	throw new RuntimeException("foobar!");
} catch (LogicException $e) {
	print "Exception raised: " . $e->getMessage() . "\n";
} finally {
	print "Finally, some cleanup!\n";
}
/*
-catch is used to handle a problem that was reported by code you called
-finally is used to clean up data/resources that the current code created/modified, no matter if a problem occurred or not
*/




  __  __       _ _   _ _ _                  _        _                 
 |  \/  |     | | | (_) (_)                | |      (_)                
 | \  / |_   _| | |_ _| |_ _ __   ___   ___| |_ _ __ _ _ __   __ _ ___ 
 | |\/| | | | | | __| | | | '_ \ / _ \ / __| __| '__| | '_ \ / _` / __|
 | |  | | |_| | | |_| | | | | | |  __/ \__ \ |_| |  | | | | | (_| \__ \
 |_|  |_|\__,_|_|\__|_|_|_|_| |_|\___| |___/\__|_|  |_|_| |_|\__, |___/
                                                              __/ |    
                                                             |___/     
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

?>



  ______ _ _        _            _    
 |  ____(_) |      | |          | |   
 | |__   _| | ___  | | ___   ___| | __
 |  __| | | |/ _ \ | |/ _ \ / __| |/ /
 | |    | | |  __/ | | (_) | (__|   < 
 |_|    |_|_|\___| |_|\___/ \___|_|\_\
                                      
//FILE LOCK EXAMPLE
<?php
  //fopen manual:
  //http://php.net/manual/en/function.fopen.php

  $myfile = fopen("counter.txt", "c+") or die("Impossibile inizializzare il file di conteggio. Ref: FAX001");
  while( !flock ($myfile, LOCK_EX) )
    {}                    // Attendo che il file sia effettivamente bloccato
  $x = fgets ($myfile);   // Leggo la prima riga del file (max 1024 caratteri)
  $x = intval ($x);       // Converto in intero
  $x ++;                  // Incremento
  if ($x > 999)           // Verifica limiti
    { $x=1; }
  ftruncate($myfile, 0);  // Tronco il file a posizione 0
  rewind($myfile);        // Riavvolgo il file (no, non e' scontato!)
  fwrite ($myfile, strval( $x ));   //Scrivo nuovo valore nel file
  fflush($myfile);        // Flush
  flock($myfile,LOCK_UN); // Sblocco il file
  fclose ($myfile);       // Chiudo il file
  echo $x;                // Restituisco all'utente il numero
?>

...oppure
	
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

       _  _____  ____  _   _ 
      | |/ ____|/ __ \| \ | |
      | | (___ | |  | |  \| |
  _   | |\___ \| |  | | . ` |
 | |__| |____) | |__| | |\  |
  \____/|_____/ \____/|_| \_|
                             
ENCODE:	
$notes = $notes->fetchNotes();
//Se invio l'header giusto, il browser mi farà vedere il proprio decoder JSON automaticamente :-D
header("Content-Type: application/json");
$jsonobj=json_encode($notes);
//Scrivo su schermo
echo $jsonobj;
//Scrivo su file
$myfile = fopen("pub/commands.txt", "w") or die("Unable to open file!");
fwrite($myfile, $jsonobj);
fclose($myfile);
	
DECODE:
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);
foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
	
   _____ _               
  / ____| |              
 | |    | | __ _ ___ ___ 
 | |    | |/ _` / __/ __|
 | |____| | (_| \__ \__ \
  \_____|_|\__,_|___/___/
                         
                         
//CLASS EXAMPLE
<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>

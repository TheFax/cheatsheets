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

<?php
require 'another.php';

foreach ($array as $elemento_array) {
	$elemento_array=1;
}

echo "Hai passato l'elemento POST id uguale a: " . $_POST['id'] ;

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

$now = date("d-m-Y H:i:s");
echo $now;


if ($numero < 12) {
    echo "Have a good morning!";
} elseif ($numero = 12) {
    echo "Have a good lunch!";
} else {
    echo "Have a good afternoon!";
}

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

$output = `ls -al`;
echo $output; 

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

?>

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

<?php
//	phpinfo();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$testnew = "Test";
globalfun ($testnew);
	function globalfun (&$test){
	    echo "$test <br>";
	    $test="TestNew";
	}
echo "$testnew <br>";
//	function inside (){
//		echo "Внутренняя функция<br/>";
//	}
?>
Bla bla bla
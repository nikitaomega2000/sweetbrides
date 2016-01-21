<?php
//	phpinfo();
	outside ();
	inside ();
	function outside (){
		echo "Внешняя функция<br/>";
		function inside (){
			echo "Внутренняя функция<br/>";
			inside ();
		}
	}
//	function inside (){
//		echo "Внутренняя функция<br/>";
//	}
?>
Bla bla bla
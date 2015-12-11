<?php
	phpinfo();
	outside ();
	inside ();
	function outside (){
		echo "Внешняя функция";
		function inside (){
			echo "Внутренняя функция";
		}
	}
?>

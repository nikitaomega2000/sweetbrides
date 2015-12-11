<?php
	phpinfo();
	outside ();
	inside ();
	function outside (){
		echo "Внешняя функция";
		function (){
			echo "Внутренняя функция";
		}
	}
?>

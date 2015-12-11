<?php
	phpinfo();
	outside ();
	inside ();
	function outside (){
		echo "Внешняя функция<br/>";
		function inside (){
			outside ();
			echo "Внутренняя функция<br/>";
		}
	}
?>

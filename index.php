<?php
	phpinfo();
	outside ();
	inside ();
	function outside (){
		echo "������� �������<br/>";
		function inside (){
			outside ();
			echo "���������� �������<br/>";
		}
	}
?>

<?php
function printMsg($msg, $tipo) {
	echo "<div class=\"$tipo\">";
		if(is_array($msg)) {
			echo '<ul>';
			foreach ($msg as $indice => $valor) {
				echo "<li>$valor</li>";
			}
			echo '</ul>';
		}
		else {
			echo $msg;
		} 
	echo "</div>";
}

if(isset($_GET['logOut']) && $_GET['logOut'] == 'true') {
	session_destroy();
	header("Location: login.php?loggedOut=true");
}
?>
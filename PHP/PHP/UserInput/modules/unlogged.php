<?php
	function get_unlogged() {
		echo <<<EOT
		<div id="unlogged">
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>
		</div>
EOT;
	}
?>
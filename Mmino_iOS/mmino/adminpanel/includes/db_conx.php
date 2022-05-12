<?php
class DBC{
	public static function connect() {
		$db_conx = mysqli_connect("SERVER_NAME", "USERNAME","PASSWORD","DATABASE_NAME");
		// Evaluate the connection
		if (mysqli_connect_errno()) {
			echo mysqli_connect_error();
			exit();
		}
		return $db_conx;
	}
}
?>

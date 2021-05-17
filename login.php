<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<form action="login.php" method="post">
			<label for="username">username</label>
			<input type="text" id="username" name="username" value="<?=$_POST['username'] ?? ''?>" required>

			<br>

			<label for="password">password</label>
			<input type="password" id="password" name="password" required>

			<br>

			<input type="submit" name="submit" value="log">
		</form>
	</body>
</html>

<?php
	// Variables
	$users = ["Manuel" => "Asanga1234",
			"Federico" => "TPSIT"];

	// Functions
	function alert($str) {
		echo "<script>
				alert('".$str."');
			</script>";
	}

	function focus($id) {
		echo "<script>
				document.getElementById('".$id."').focus();
			</script>";
	}
	// Functions

	session_start();
	session_destroy();

	if (isset($_POST["submit"])) {
		$username = htmlentities($_POST["username"], ENT_HTML5, "utf-8");
		$password = htmlentities($_POST["password"], ENT_HTML5, "utf-8");

		if ($username == "") {
			alert("Username required!");
			focus("username");
			exit();
		}

		if ($password == "") {
			alert("Password required!");
			focus("password");
			exit();
		}

		if (!array_key_exists($username, $users)) {
			alert("User doesn\'t exist!");
			$_POST["username"] = "";
			focus("username");
			exit();
		}

		if ($users[$username] != $password) {
			alert("Wrong password!");
			focus("password");
			exit();
		}

		session_start();
		$_SESSION["username"] = $username;

		header("Location: homePage.php");
		exit();
	}
?>

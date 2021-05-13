       <?php
        if(isset($_POST["login"])) {
            if(!isset($_POST["username"]) || !isset($_POST["password"])) {
                die("Inserisci tutti i dati!");
            } else {
                $username = htmlentities($_POST["username"], ENT_HTML5, 'UTF-8');
                $password = htmlentities($_POST["password"], ENT_HTML5, 'UTF-8');

                $checkLogin = array(
                                array("username" => "username1",
                                      "password" => "password1"),
                                array("username" => "username2",
                                      "password" => "password2"));
                 
                foreach ($checkLogin as $value) {
                    if ($value["username"] === $username) {
                        if ($value["password"] === $password) {
                          session_start();
                          $_SESSION["username"] = $username;
                            header('Location: welcome.php');

                        }
                    } 
                }
            }
        }
        ?>

<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title>Es PHP e Sessioni</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" action="Prova.php" method="POST">
          <h1>Login</h1>
          <br>
            <h2>Username</h2>
            <input type="text" name="username" <?php if(isset($_POST["login"])) {echo"value = '$username'";}?>required>
              <h2>Password</h2>
              <input type="password" name="password" value="" required>
              <br>
            <br>
          <br>
            <input type="submit" name="login" value="Invia dati">
        </form>
    </body>
</html>


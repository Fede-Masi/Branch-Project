       <?php
        if(isset($_POST["login"])) {
            if(!isset($_POST["username"]) || !isset($_POST["password"])) {
                die("Compila tutti i campi!");
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
    </head>
    <body>
        <form class="box" action="Prova.php" method="POST">
          <h1>Login</h1>
          <fieldset>
            <legend>Inserisci Dati</legend>
          <br>
          <ul>
            <li>
            <label><h2>Username</h2></label>
            <input type="text" name="username" <?php if(isset($_POST["login"])) {echo"value = '$username'";}?>required>
            </li>
            <li>
              <label><h2>Password</h2></label>
              <input type="password" name="password" value="" required>
            </li>
          </ul>
          </fieldset>
              <br>
            <br>
          <br>
            <input type="submit" name="login" value="Invia dati">
        </form>
    </body>
</html>


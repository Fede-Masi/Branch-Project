<?php
    session_start();
?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title>Visualizzazione</title>
    </head>
    <body>
      <header> <h1>Welcome
        <?php
            echo $_SESSION['username'];
        ?>
          </h1></header>
          <a href="logout.php"><button><p>Logout</p></button></a>
    </body>
</html>

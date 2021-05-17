<?php
    session_start();
?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
      <title>Home</title>
    </head>
    <body>
      <header> <h1>Welcome
        <?php
            echo $_SESSION['username'];
        ?>
          </h1></header>
          <a href="logout.php"><button><p>logout</p></button></a>
    </body>
</html>

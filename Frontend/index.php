<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CultureSpace</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">  
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require "header.php"; ?>
    <div class="container-fluid">
      <div class="container">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Введите название">
          </div>
          <button type="submit" class="btn btn-default">Применить</button>	  
        </form>	  
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
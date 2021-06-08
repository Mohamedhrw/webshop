<!DOCTYPE html>
<html lang="de">
<head>
  <title>Webshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Startseite.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<head>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i class="fas fa-mobile-alt"></i>  Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i>
          Alle Kategorien
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">iPhone</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Samsung</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sonstige</a>
        </div>
      </li>
    </ul>
    <form class="navbar-form navbar-left" action="Startseite.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Suchen" name="suchen">
      </div>
      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i> Suchen </button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Regestieren</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Anmelden</a></li>
    </ul>
  </div>
</nav>

<div class="container">

  </div>
</body>
</html>

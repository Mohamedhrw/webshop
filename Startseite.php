<!DOCTYPE html>
<html lang="de">
<head>
  <title>Webshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  include ("datenbankverbunden.php")
  ?>
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
    <form class="navbar-form navbar-left" action="Produktanzeige.php">
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
  <div class="col-md-4">
          <a href="bilder\Sumsung9.jpg" target="_blank">
            <img src="bilder\Sumsung9.jpg" alt="Lights" style="width:52.9%">
            <div class="caption">
              <h4>Samsung G960F Galaxy S9 DuoS 64 GB</h4>
            </div>
          </a>
          <div class="select-wrapper">
            <label >Menge :</label>
            <select>
              <option> 1</option>
              <option> 2</option>
              <option> 3</option>
            </select>
          </div>
          <p>  200 <i class="fas fa-euro-sign"></i> </p>
        <button type="button"  class="btn" ><i class="fas fa-shopping-cart"> Jetzt Kaufen </i></button>
      </div>
      <div class="col-md-4">
              <a href="bilder\fee_786_587_png.webp" target="_blank">
                <img src="bilder\fee_786_587_png.webp" alt="Lights" style="width:110.5%">
                <div class="caption">
                  <h4>SAMSUNG Galaxy S21 5G 128 GB</h4>
                </div>
              </a>
              <div class="select-wrapper">
                <label >Menge :</label>
                <select>
                  <option> 1</option>
                  <option> 2</option>
                  <option> 3</option>
                </select>
              </div>
              <p>  200 <i class="fas fa-euro-sign"></i> </p>
            <button type="button"  class="btn" ><i class="fas fa-shopping-cart"> Jetzt Kaufen </i></button>
          </div>

      <div class="col-md-4">
          <a href="bilder\iPhoneX.jpeg" target="_blank">
            <img src="bilder\iPhoneX.jpeg" alt="Nature" style="width:43%">
            <div class="caption">
                <h4>Apple iPhone X 64GB space grau</h4>
          </a>
          <div class="select-wrapper">
            <label >Menge :</label>
            <select>
              <option> 1</option>
              <option> 2</option>
              <option> 3</option>
            </select>
          </div>
          <p>  200 <i class="fas fa-euro-sign"></i> </p>
        <button type="button"  class="btn" ><i class="fas fa-shopping-cart"> Jetzt Kaufen </i></button>
      </div>
        </div>
        <div class="col-md-4">
                <a href="bilder\71DqTU5Zi4L._SY741_.jpg" target="_blank">
                  <img src="bilder\71DqTU5Zi4L._SY741_.jpg" alt="Lights" style="width:57.3%">
                  <div class="caption">
                    <h4>Huawei Mate 20 lite</h4>
                  </div>
                </a>
                <div class="select-wrapper">
                  <label >Menge :</label>
                  <select>
                    <option> 1</option>
                    <option> 2</option>
                    <option> 3</option>
                  </select>
                </div>
                <p>  200 <i class="fas fa-euro-sign"></i> </p>
              <button type="button"  class="btn" ><i class="fas fa-shopping-cart"> Jetzt Kaufen </i></button>
            </div>
      <div class="col-md-4">
          <a href="bilder\samsung-galaxy-note9-blue.png" target="_blank">
            <img src="bilder\samsung-galaxy-note9-blue.png" alt="Fjords" style="width:55%">
            <div class="caption">
              <h4>Galaxy S10 128 Gb Dual Sim - Schwarz</h4>
          </a>
          <div class="select-wrapper">
            <label >Menge :</label>
            <select>
              <option> 1</option>
              <option> 2</option>
              <option> 3</option>
            </select>
          </div>
          <p>  200 <i class="fas fa-euro-sign"></i> </p>
        <button type="button"  class="btn" ><i class="fas fa-shopping-cart"> Jetzt Kaufen </i></button>
    </div>
  </div>


  </div>
</body>
</html>

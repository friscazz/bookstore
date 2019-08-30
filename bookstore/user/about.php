
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>bookstore</title>
  </head>
  <body>
      <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BookStore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <a href="index.php"class="nav-link">Home</a>
        <button class ="btn btn-success"formaction="cart.php">Cart</button>
        <a class ="nav-link"href="about.php">About Us</a>
        <a class="nav-link" href="logout.php">Logout</a>

      </li>
    </ul>
  </div>
</nav>

<!--jumbotron-->
  <div class="jumbotron jumbotron-fluid">
  <div class="container text-center" style="padding-bottom: 320px;">
    <h1 class="display-4">Selamat Datang di BookStore</h1><br>
    <h3>Tempat Beli Buku Tepercaya</h3>
    
  </div>
</div>

<div class="container text-center">
  <h1>About Us</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem </p>
</div>
  <div class="mt-5">
    
    <div class="form-group">
      <form action="ppesan.php" method="POST">
    <div class="container justify-content-center">
      <div class="row">
        <div class="col text-center">
          <h1>Pesan</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-9 offset-1">
          <label>Email</label>
          <input class="form-control" type="text" name="email" placeholder="email">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-9 offset-1">
          <label>Nama</label>
          <input class="form-control" type="text" name="nama" placeholder="nama">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-9 offset-1">
          <label>Pesan</label>
          <textarea class="form-control" type="text" name="pesan" placeholder="pesan"></textarea>
        </div>   
      </div>
    </div>
  </div>
  <div class="container justify-content-center">
      <div class="row">
        <div class="col-9 offset-1">
          <button class="btn btn-primary" type="submit">Kirim</button>
        </div>   
      </div>
    </div>
    </form>
  </div>
  
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
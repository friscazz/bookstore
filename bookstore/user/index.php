
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


  <div class="container">
  <div class="row"> 
    <?php 
      include '../connect.php';
      include 'sesi.php';
      $id = 1;
      $sql = mysqli_query($conn,"SELECT * FROM buku"); 
        while ($row = mysqli_fetch_assoc($sql)){?>
    <div class="col-3">
   <div class="card">  
    <img src="buku.png" class="card-img-top" alt="buku">
        <div class="card-body">
          <p class="card-text text-center">
            
                    <?php echo $row['nama_buku'];?><br>
                    <?php echo $row['penulis'];?> <br>
                    <?php echo $row['harga'];?><br>
                  </p>
           <div class="text-center">
            <a href="pemesanan.php?id=<?php echo $row['id'];?>" class="btn btn-success">Beli</a>
            <a href="addcart.php?nama_buku=<?php echo $row['nama_buku'];?>&penulis=<?php echo $row['penulis'];?>&harga=<?php echo $row['harga'];?>" class="btn btn-success">Cart</a>
        </div>
  
        </div>
      </div>
    </div>
      <?php } ?>
  
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php  include '../connect.php';
        include 'sesi.php';
        $id=$_GET['id'];?>
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
        <a class="nav-link" href="logout.php">Logout</a>
        
      </li>
      </li>
    </ul>
  </div>
</nav>
<?php $sql = mysqli_query($conn,"SELECT * FROM buku WHERE id = '$id'");
  while ($row=mysqli_fetch_assoc($sql)) {?>
  <form action="pedit.php" method="POST">
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">

          <label>Kategori</label>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input class="form-control" type="text" name="kategori" placeholder="Kategori" value="<?php echo $row['Kategori']; ?>">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">
          <label>Nama Buku</label>
          <input class="form-control" type="text" name="nama_buku" placeholder="Nama Buku" value="<?php echo $row['nama_buku']; ?>">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">
          <label>Penulis</label>
          <input class="form-control" type="text" name="penulis" placeholder="Penulis"  value="<?php echo $row['penulis']; ?>">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">
          <label>Penerbit</label>
          <input class="form-control" type="text" name="penerbit" placeholder="Penerbit"  value="<?php echo $row['penerbit']; ?>">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">
          <label>Harga</label>
          <input class="form-control" type="text" name="harga" placeholder="Harga"  value="<?php echo $row['harga']; ?>">
        </div>   
      </div>
    </div>
    <div class="container justify-content-center">
      <div class="row">
        <div class="col-md-8">
          
          <button class="btn btn-primary" type="submit">Edit</button>
        </div> 
        <?php } ?>  
      </div>
    </div>
    
  </form>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
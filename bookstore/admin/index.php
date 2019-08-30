<?php  include '../connect.php';
        include 'sesi.php';?>
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
        <a href="index.php" class="nav-link">Home</a>
        <a class ="nav-link" href="tampiluser.php">User</a>
        <a class ="nav-link" href="pesan.php">Pesanan</a>
        <a  class="nav-link" href="pesankesan.php">Pesan</a>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      </li>
      </li>
    </ul>
  </div>
</nav>
<a href="tambah.php"class="btn btn-primary">+ Tambah Buku</a>
<table class="table">
  <tr>
    <th>id</th>
    <th>Kategori</th>
    <th>Nama Buku</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Harga</th>
    <th>Tindakan</th>
  </tr>
  <?php 
  $id = 1;
  $sql = mysqli_query($conn,"SELECT * FROM buku"); 
    while ($row = mysqli_fetch_assoc($sql)){?>
      <tr>
        <td><?php echo $id++; ?></td>
      <td><?php echo $row['Kategori'];?></td>
      <td><?php echo $row['nama_buku'];?></td>
      <td><?php echo $row['penulis'];?></td>
      <td><?php echo $row['penerbit'];?></td>
      <td><?php echo $row['harga'];?></td>
      <td><a class="btn btn-primary"href="edit.php?id=<?php echo $row['id'];?>">edit</a>
          <a class="btn btn-danger"href="hapus.php?id=<?php echo $row['id'];?>" onclick="return confirm('Apakah anda ingin menghapus <?php echo $row['nama_buku'];?>')">Hapus</a>
      </td>
      </tr>
  <?php } ?>
</table>









  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
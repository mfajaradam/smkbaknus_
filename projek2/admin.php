<?php
    require "function.php";

    // descending / DESC mundur
    // ascending / ASC naik
    $siswa = query("SELECT * FROM murid ORDER BY id DESC");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ADMIN</title>
  </head>
  <body>
    <div class="text-center mb-5">
        <div class="text-uppercase">
            <h1>pesan user</h1>
        </div>
    </div>

    <div class="container">
        <table class="table border border-dark">
        <thead class="text-center thead-dark text-capitalize">
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">subject</th>
            <th scope="col">message</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
        <?php $i = 1; ?>
              <?php foreach ($siswa as $row) : ?>
              <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["nama"]; ?></td>
                  <td><?= $row["email"]; ?></td>
                  <td><?= $row["subjects"]; ?></td>
                  <td><?= $row["messages"]; ?></td>
                  <td>
                      <a class="btn btn-primary" href="ubah.php?id=<?= $row["id"]; ?>" role="button">Ubah</a>
                      <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin?');">Hapus</a>
                  </td>
              </tr>
              <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- <button type="button" class="btn btn-outline-dark"> -->
          <a class="btn btn-success" href="index.php">Kembali</a>
      <!-- </button> -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
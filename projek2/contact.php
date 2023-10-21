<?php
    require "function.php";

    if (isset($_POST["submit"])) {

        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambah');
                    document.location.href='admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambah');
                    document.location.href='index.php';
                </script>
            ";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CONTACT</title>
  </head>
  <body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand">Membuat Website</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link text-dark" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="biodata.php">Tentang Saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link contact text-dark" href="contact.php">Hubungi Saya</a>
              </li>
            </ul>
          </div>
        </div>
        </nav>

        <!-- form contact -->
        <div class="container mt-4">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <form class="bg-info pl-5 pt-" style="border-radius: 15px;" action="" method="post">
                  <div class="pb-3 text-uppercase" style="padding-left: 80px;">
                      <h1>Contact</h1>
                  </div>
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control col-10" placeholder="Masukan Nama" id="nama" name="nama" required>
                  </div>
                  <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control col-10" placeholder="Masukan Email" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                      <label for="text-area">SUBJECT</label>
                      <input type="text" class="form-control col-10" placeholder="Masukan Subject" id="text-area" name="subjects" required>
                    </div>
                    <div class="form-group">
                      <label for="message">MESSAGE</label>
                      <textarea class="form-control col-10" id="message" rows="3" name="messages" required></textarea>
                    </div>
                    <div class="text-right pb-3" style="padding-right: 65px;">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
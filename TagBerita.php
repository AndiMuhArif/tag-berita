<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tampilan Berita</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <h1>Tampilan Berita</h1>

    <div class="row">
      <?php

    
      require_once "connection.php";
      $sql = "SELECT * FROM berita";
      $result = connect()->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>

          <div class="col-md-4">
            <div class="card">
              <img src="<?php echo $row["gambar"]; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row["judul"]; ?></h5>
                <p class="card-text"><?php echo $row["isi"]; ?></p>
                <p class="card-text">
                  <small class="text-muted">
                    <i class="bi bi-hashtag"></i> <?php echo implode(", ", explode(",", $row["hashtag"])); ?>
                  </small>
                </p>
              </div>
            </div>
          </div>

          <?php
        }
      } else {
        echo "Tidak ada berita";
      }

      ?>
    </div>
  </div>
</body>
</html>

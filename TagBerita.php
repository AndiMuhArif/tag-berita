<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Input Hashtag</title>
</head>
<body>

<div class="container mt-5">
  <h2>Input Hashtag</h2>


  <form action="process.php" method="post">
    <div class="form-group">
      <label for="hashtag">Hashtag:</label>
      <input type="text" class="form-control" id="hashtag" name="hashtag" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <hr>

  
  <h2>Daftar Hashtag</h2>
  <ul class="list-group">
    <?php
    
    require_once 'connection.php';

   
    $query = "SELECT * FROM hashtags";
    $result = mysqli_query($conn, $query);

    
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<li class="list-group-item">' . $row['hashtag'] . '</li>';
    }

    
    mysqli_close($conn);
    ?>
  </ul>
</div>

</body>
</html>

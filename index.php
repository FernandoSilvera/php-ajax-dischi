<?php 

include "db/db_album.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
    <div class="container">
      <div class="row row-cols-5 gy-3">
        <?php foreach ($db_album as $album) { ?>
          
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="<?php echo $album["poster"] ?>" alt="<?php echo $album["title"] ?>">
              <div class="card-body">
                <h5 class="card-title text-light text-uppercase"><?php echo $album["title"] ?></h5>
                <h6 class="card-subtitle text-secondary"><?php echo $album["author"] ?></h6>
                <h6 class="card-subtitle text-secondary"><?php echo $album["year"] ?></h6>
              </div>
            </div>
          </div>
          
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>
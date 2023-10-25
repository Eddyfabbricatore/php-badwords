<?php
$paragraph = trim($_GET['paragraph']);
$worldToCensured = trim($_GET['worldToCensured']);

$paragraphCensored = str_replace($worldToCensured, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <title>Result</title>
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-3">Testo inserito</h2>

    <p class="mb-3"> <?php echo $paragraph ?> </p>

    <p class="mb-3">Lunghezza del testo inserito: <?php echo strlen($paragraph) ?> </p>

    <h2 class="mt-5 mb-3">Testo censurato</h2>

    <p class="mb-3"> <?php echo $paragraphCensored ?> </p>

    <p class="mb-3">Lunghezza del testo censurato: <?php echo strlen($paragraphCensored) ?> </p>
  </div>
</body>
</html>
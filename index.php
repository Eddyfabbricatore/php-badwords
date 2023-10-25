<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <title>PHP Badwords</title>
</head>
<body>
  <div class="container my-5">
    <form action="result.php" method="GET">
      <div class="mb-3">
        <label for="paragraph" class="form-label">Testo</label>
        <input type="text" class="form-control" id="paragraph" name="paragraph" placeholder ="Inserisci un testo...">
      </div>

      <div class="mb-3">
        <label for="worldToCensured" class="form-label">Parola</label>
        <input type="text" class="form-control" id="worldToCensured" name="worldToCensured" placeholder ="Inserisci una parola da censurare...">
      </div>
      
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
  </div>
</body>
</html>
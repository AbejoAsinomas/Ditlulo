<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body >
  <!-- Barra navegación -->
  <?php include "navbar.php"?>
  <!-- Fin barra navegación -->
  <!-- Form control -->
  <div class="container">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Gmail</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Quéjate aquí</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  <!-- Form control -->
  <?php include "footer.php" ?>


  <script src="js/bootstrap.js"></script>
</body>

</html>
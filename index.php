<?php
$email = $_GET['email'];
echo $email;
echo '<br>';

if (strpos($email, '.') && strpos($email, '@')) {
  echo "l'email che hai inserito è valida.";

} else {
  echo "l'email non è valida non contiene una dei seguenti caratteri '.' o '@'";
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap -->

</head>

<body>
  <h1 class='text-center my-3'>New subscribe</h1>
  <div class="container">
    <form action="index.php" method="GET">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" id="email" name='email'>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
  </form>
  </div>
</body>

</html>
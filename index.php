<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <header class="container-fluid bg-dark text-center text-white py-3">
    <h1>Password Generator</h1>
  </header>
  <main>
    <div class="container my-5">
      <form action="index.php" method="GET">
        <div class="row justify-content-center">
          <div class="form-floating col-7 m-3">
            <input type="number" class="form-control" name="pwdLength" id="floatingInput" min="8" max="16" step="1" placeholder="Insert a number between 8 and 16 to generate a related length password">
            <label for="floatingInput">Insert a number between 8 and 16 to generate a related length password</label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-2">
            <button type="submit" class="btn btn-warning">GENERATE</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer></footer>
</body>
</html>
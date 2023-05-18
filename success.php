<?php
  session_start();
  $result = $_SESSION['result'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <header class="container-fluid bg-dark text-center text-white py-3">
    <h1>Password Generator</h1>
  </header>
  <main>
    <div class="container my-5 text-center">
      <h3>Your secure generated password is:</h3>
      <div class="ms-result d-flex align-items-center justify-content-center gap-5 text-success m-3 p-3">
        <span style="font-size: 3rem"><i class="fa-solid fa-fingerprint"></i></span>
        <span><?php echo $result ?></span>
        <span style="font-size: 3rem"><i class="fa-solid fa-fingerprint"></i></span>
      </div>
    </div>
  </main>
  <footer class="fixed-bottom">
    <div class="container-fluid bg-dark text-center text-white py-3">
      <span>Made with </span>
      <a href="https://www.w3schools.com/html/default.asp" class="text-decoration-none"><i class="fa-brands fa-html5"></i></a>
      <a href="https://getbootstrap.com/" class="text-decoration-none"><i class="fa-brands fa-bootstrap"></i> </a>
      <a href="https://www.w3schools.com/js/" class="text-decoration-none"><i class="fa-brands fa-js"></i> </a>
      <a href="https://www.php.net/" class="text-decoration-none"><i class="fa-brands fa-php"></i> </a>
      <span>by </span>
      <a href="https://github.com/mcspe" class="text-decoration-none">@mcspe</a>
    </div>
  </footer>
</body>
</html>
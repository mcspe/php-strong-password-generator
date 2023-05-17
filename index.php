<?php
  function randPwd ($lenght) {
    // set possible characters
    $characters = [
      'abcdefghijklmnopqrstuvwxyz',
      '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~',
      '0123456789'
    ];
    $characters[] = strtoupper($characters[0]);
    
    // set provisional password var
    $provisionalPwd = '';

    // declare random character selector function
    function getRandChar($str) {
      $index = rand(0, (strlen($str) - 1));
      return $str[$index];
    }

    // add mandatory charachters 
    for ($i=0; $i < count($characters); $i++) { 
      $provisionalPwd .= getRandChar($characters[$i]);
    }

    // add to provisional password as many random charachters as the total lenght needed minus the mandatory charachters
    for ($j=0; $j < ($lenght - 4); $j++) { 
      //select a random index to add a letter, a number, a special character or a capital letter
      $charTypeSelector = rand(0, (count($characters) - 1)); 
      $provisionalPwd .= getRandChar($characters[$charTypeSelector]);
    }

    // randomize the pwd generated to avoid the first 4 characters of the string to always be in the same position
    $pwd = str_shuffle($provisionalPwd);

    return $pwd;
  }
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
    <div class="container my-5">
      <form action="index.php" method="GET">
        <div class="row justify-content-center">
          <div class="form-floating col-7 m-3">
            <input type="number" class="form-control" name="pwdLength" id="floatingInput" min="8" max="16" step="1" placeholder="Insert a number between 8 and 16 to generate a related length password">
            <label for="floatingInput">Insert a number between 8 and 16 to generate a related length password</label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-2 text-center">
            <button type="submit" class="btn btn-warning">GENERATE</button>
          </div>
        </div>
      </form>
      <div class="ms-result d-flex align-items-center justify-content-center gap-5 text-success m-3 p-3">
        <span style="font-size: 3rem"><i class="fa-solid fa-fingerprint"></i></span>
        <span>risultato</span>
        <span style="font-size: 3rem"><i class="fa-solid fa-fingerprint"></i></span>
      </div>
    </div>
  </main>
  <footer></footer>
</body>
</html>
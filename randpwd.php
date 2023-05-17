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


<?php
  $badword = $_GET["badword"];

  $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
  culpa qui officia deserunt mollit anim id est laborum.';

  $paragraph_correct = str_replace($badword, '***', $paragraph);
  $paragraph_length = ' Il paragrafo è lungo ' . strlen($paragraph_correct) . ' caratteri.';

  // echo $paragraph_correct . $paragraph_length;
?>

<h2>Lorem</h2>
<p><?php echo $paragraph_correct ?></p>
<span><?php echo $paragraph_length ?></span>

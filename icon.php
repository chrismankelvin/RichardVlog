<?php
// session_start();

function icons1() {
  include("./inc/icons.php");
}

function icons2() {
  include("./inc/icons1.php");
}

// Check if the user has already selected a set of icons
if (!isset($_SESSION['chosen_icons'])) {
  // Generate a random number between 0 and 1.
  $random_number = rand() / getrandmax();

  // Check if the number is less than 0.5.
  if ($random_number < 0.5) {
    $_SESSION['chosen_icons'] = 'icons1';
  } else {
    $_SESSION['chosen_icons'] = 'icons2';
  }
}

// Based on the chosen set of icons, include the respective file.
if ($_SESSION['chosen_icons'] === 'icons1') {
  icons1();
} else {
  icons2();
}
?>



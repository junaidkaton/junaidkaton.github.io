<?php
$correctPassword = "test";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $submittedPassword = $_POST["password"];

  if ($submittedPassword === $correctPassword) {
    header("Location: home.html");
    exit;
  } else {
    echo "Invalid password!";
  }
}
?>

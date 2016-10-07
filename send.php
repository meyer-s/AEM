
<?php

$name = $email  = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$myfile = fopen("admin.txt", "a") or die("Unable to open file!");
fwrite($myfile, $name);
fwrite($myfile, $email);
fwrite($myfile, $comment);
fclose($myfile);


?>

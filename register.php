<html>
<h1>
<?php

$filename = "loginCredentials";
if(isset($_POST['submit'])) {
  $familyName = $_POST['familyName'];
  $surname = $_POST['surname'];
  $emailAddress = $_POST['emailAddress'];
  $password = $_POST['password'];
  $phoneNumber= $_POST['phoneNumber'];
  // öffnen der Datei im Appendmodus
  $filePointer = fopen($filename, "a");

  $hashFormat = "2y$10$";
  $salt = "iusesomecrazystringshaha26";
  $hashFAndSalt = $hashFormat . $salt;
  $password = crypt($password, $hashFAndSalt);
  // schreiben der Daten in die CSV-Datei
  $data = array($surname,$familyName,$phoneNumber,$emailAddress, $password );
  fputcsv($filePointer,$data);
  fclose($filePointer);
}
$script_path = __FILE__;
$file_path = dirname($script_path) . '/' . $filename;



?></h1>

</html>

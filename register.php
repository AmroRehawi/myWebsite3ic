<html>
<h1>
<?php

$filename = "loginCredentials";
if(isset($_POST['submit'])) {
  $familyName = $_POST['familyName'];
  $surname = $_POST['surname'];
  $emailAddress = $_POST['emailAddress'];

  // öffnen der Datei im Appendmodus
  $filePointer = fopen($filename, "a");

  // schreiben der Daten in die CSV-Datei
  $data = array($surname,$familyName,$emailAddress);
  fputcsv($filePointer,$data);
  fclose($filePointer);

  echo "im If \n";
}
$script_path = __FILE__;
$file_path = dirname($script_path) . '/' . $filename;

echo "außerhalb des iffs";

?></h1>

</html>

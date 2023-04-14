<html>
<h1>
<?php
$filename = "loginCredentials";
if(isset($_POST['submit'])) {
  if (isset($_FILES["profilepic"]) && $_FILES["profilepic"]["error"] == 0) {
    // Set destination path for the uploaded file
    $target_dir = "C:/Users/amro.rehawi/Amro.Rehawi.3Ic.Labor/myWebsite3ic/profilepics";
    $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
    $uploadOk = 1;

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profilepic"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["profilepic"]["name"])). " has been uploaded.";
        // Add the file URL to the database
        $file_url = "http://example.com/profilepics/" . basename($_FILES["profilepic"]["name"]);
        // Perform database query to insert $file_url into the userdata table
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  } else {
    echo "No file was uploaded.";
  }

  $familyName = $_POST['familyName'];
  $surname = $_POST['surname'];
  $emailAddress = $_POST['emailAddress'];
  $password = $_POST['password'];
  $phoneNumber= $_POST['phoneNumber'];

  $hashFormat = "2y$10$";
  $salt = "iusesomecrazystringshaha26";
  $hashFAndSalt = $hashFormat . $salt;

  if ($_POST["password"] !== $_POST["passwordRepeat"]){
    die("Password repetition must match!");
  }

  $_POST['password'] = crypt($password, $hashFAndSalt);

$mysqli = require __dir__ . "/database.php";
$address = 2;

try{
  $sql_stmt = "INSERT INTO userdata (surname, familyName, emailAddress, password_Hash, phoneNumber, address_idstreet) VALUES (?,?,?,?,?,?)";

  $stmt = $mysqli->stmt_init();

  if(! $stmt -> prepare($sql_stmt)){
    die("SQL ERROR: ". $mysqli->error);
  }
  $stmt->bind_param("sssssi",$surname,$familyName,$emailAddress,$_POST['password'],$phoneNumber, $address);

if($stmt->execute()) {
  header("Location: signup-success.html");
  exit;
}
}
catch(PDOException $e)
 {
   echo ( 'Fehler: ' . $e->getMessage());
 }
}
?></>
</html>

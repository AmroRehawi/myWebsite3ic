<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up page</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body style ="background-color: #EAF6F6;" >
<?php
if(isset($_SESSION['user_id'])){
  $mysqli = require __DIR__ . "/database.php";
  $sql = "select * from userdata where idUser = {$_SESSION["user_id"]}";
  $result = $mysqli ->query($sql);
  $user = $result-> fetch_assoc();
  ?>
  <h1>Hello <?php echo htmlspecialchars($user["surname"]); ?></h1>
  <h2><a href="logout.php">log out</a></h2>
  <?php
}else{
  echo '
  <h1>not logged in</h1>
  <p>Click here to <a href="insertToLogin.php">log in</a> or here to <a href="signUpForm.php">sign out</a></p>
  ';
}
?>
</body>
</html>

<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST"){

  $mysqli = require __DIR__ . "/database.php";
  $sql = sprintf( "Select * from userdata where emailAddress = '%s'",
            $mysqli->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
if ($user) {
  if (password_verify($_POST["password"], $user["password_Hash"])){
    session_start();

    $_SESSION["user_id"] = $user["idUser"];
    header("Location: indexs.php");
    exit;
  }
}

  $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign in page</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body style ="background-color: #EAF6F6;" >

<form class="signUpForm" method="POST">
  <h2>Log in</h2>
  <?php if ($is_invalid): ?>
    <h3>Invalid login</h3>
  <?php endif; ?>
  <div>
    <label class="label" for="email">Email-Address:</label>
    <input class="input" type="email" name = "email" id="email"
           value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br>
  </div>
  <div>
    <label class="label" for="password">Password:</label>
    <input class="input" type="password" name = "password" id = "password"><br>
    <button>Log in</button>
  </div>


</html>

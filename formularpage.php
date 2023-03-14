<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formularpage</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body style ="background-color: #EAF6F6;" >
<!-- name is what you send to php -->

<form class="formularPage-form" action="register.php" method = "post">
    <label class="label">Surname:</label>
  <input type="text" name="surname" id="surname" required minlength="4" maxlength="15" size="10"><br>
  <label class="label">Family name:</label>
  <input class="input" type="text" name = "familyName" id="familyName" required minlength="4" maxlength="15" size="10"><br>
  <label class="label">Email-Adress:</label>
  <input class="input" type="email" name = "emailAdress" id="emailAdresse"><br>
  <label class="label">Password:</label>
  <input class="input" type="password" name = "password" id = "password"><br>
  <label class="label">Phone number:</label>
  <input class="input" type ="number" name = "phoneNumber" id = "phoneNumber"><br>
  <label class="label">Upload a profile image:</label>
  <input type = "file" id="profilepic" name ="profilepic"><br>
  <input class="input" type = "submit">
</form>




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formularpage</title>
</head>
<body>
<!-- name is what you send to php -->
<form action="register.php" method = "post">
  <label>Surname:</label>
  <input type="text" name="surname" id="surname" required minlength="4" maxlength="15" size="10"><br>
  <label>Family name:</label>
  <input type="text" name = "familyName" id="familyName" required minlength="4" maxlength="15" size="10"><br>
  <label>Email-Adress:</label>
  <input type="email" name = "emailAdress" id="emailAdresse"><br>
  <label>Password:</label>
  <input type="password" name = "password" id = "password"><br>
  <label>Phone number:</label>
  <input type ="number" name = "phoneNumber" id = "phoneNumber"><br>
  <input type = "submit">


</form>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formularpage</title>
</head>
<body>
<!-- name is what you send to php, post ist the send method -->
<form action="register.php" method = "post">
  <label>Surname:</label>
  <input type="text" name="surname" id="surname" ><br>
  <label>Family name:</label>
  <input type="text" name = "familyName" id="familyName" ><br>

  <label>Email-Adress:</label>
  <input type="email" name = "emailAddress" id="emailAddress"><br>
  <!--
  <label>Password:</label>
  <input type="password" name = "password" id = "password"><br>
  <label>Phone number:</label>
  <input type ="number" name = "phoneNumber" id = "phoneNumber"><br> -->
  <input type = "submit" name = "submit" id = "submit">


</form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign up page</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body style ="background-color: #EAF6F6;" >
<!-- name is what you send to php -->

<form class="signUpForm" action="process-signup.php" method = "post">

  <div>
    <label class="label" for="surname">Surname:</label>
  <input class="input" type="text" name="surname" id="surname"required minlength="4" maxlength="15" size="10"><br>
  </div>
  <div><label class="label" for="familyName">Family name:</label>
  <input class="input" type="text" name = "familyName" id="familyName" required minlength="4" maxlength="15" size="10"><br>
  </div>
  <div>
    <label class="label" for="emailAddress">Email-Address:</label>
  <input class="input" type="email" name = "emailAddress" id="emailAddress"><br>
  </div>
  <div>
  <label class="label" for="password">Password:</label>
  <input class="input" type="password" name = "password" id = "password"><br>
  </div>
  <div>
  <label class="label" for="passwordRepeat">Repeat it:</label>
  <input class="input" type="password" name = "passwordRepeat" id = "passwordRepeat"><br>
  </div>
  <div>
  <label class="label" for="phoneNumber">Phone number:</label>
  <input class="input" type ="number" name = "phoneNumber" id = "phoneNumber"><br>
  </div>
  <div>
    <label class="label" for="profilepic">Profile image:</label>
  <input type = "file" id="profilepic" name ="profilepic"><br>
  </div>
  <br>
  <h3>Address information</h3>
  <div>
    <label class="label" for="streetName">Street name:</label>
    <input type = "text" id="streetName" name ="streetName"><br>
  </div>
  <div>
    <label class="label" for="streetNumber">Street number:</label>
    <input type = "text" id="streetNumber" name ="streetNumber"><br>
  </div>
  <div>
    <label class="label" for="zipCode">Zip code:</label>
    <input type = "text" id="zipCode" name ="zipCode"><br>
  </div>
  <div>
    <label class="label" for="city">City:</label>
    <input type = "text" id="city" name ="city"><br>
  </div>
  <div>
    <label class="label" for="state">State:</label>
    <input type = "text" id="state" name ="state"><br>
  </div>
    <input class="input" type = "submit" name="submit">
</form>




</body>
</html>

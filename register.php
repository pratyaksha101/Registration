<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="connect.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill the registration form</p>
    <hr>

    <label for="fname"><b> First Name</b></label>
    <input type="text" placeholder="Enter your first name" name="fname" id="fname" required>\
    <br><br>

    <label for="lname"><b> Last Name</b></label>
    <input type="text" placeholder="Enter your last name" name="lname" id="lname" required>\
    <br><br>

    <label for="DOB"><b>DateofBirth:</b></label>
    <input type="datetime-local" placeholder="DOB" name="DOB" id="DOB" required>\
    <br><br>

     <label for="Gender"><b>Gender</b></label>
    <br>
    <input type="radio" name="Gender"/> Male <br>  
<input type="radio" name="Gender"/> Female <br>  
<input type="radio" name="Gender"/> Other  
<br><br>

<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br><br>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>
    <br><br>
 

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

  

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
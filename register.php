
<form action="insert.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>username</b></label>
    <input type="text" placeholder="Enter Username" name="user" id="user" required>

    <label for="password1"><b>Enter Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1" id="password1" required>
    <hr>
    <label for="password2"><b>Confirm Password</b></label>
    <input type="password" placeholder="Enter Password" name="password2" id="password2" required>
    <hr>
    <label for="email"><b></b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

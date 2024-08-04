<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f4f4f4;
}

* {
  box-sizing: border-box;
}

/* Style the form */
form {
  border: 3px solid #f1f1f1;
  padding: 20px;
  width: 30%; /* Set a width if needed */
  margin: 100px auto; /* Center the form */
  background-color: #fff;
  border-radius: 5px;
}

/* Style the input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Style the button */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}

/* Style the "Forgot Password" link */
a {
  color: dodgerblue;
  font-size: 14px;
}

/* Style the "Sign Up" link */
a:hover {
  color: #4CAF50;
}

/* Style the container for the sign up form */
.signup-form {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Black with opacity */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Style the sign up form */
.signup-form-content {
  background-color: #fefefe;
  margin: 5% auto;
  /* 5% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on your design */
}

/* Style the "Close Button" */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Style the sign up form inputs */
.signup-form-content input[type=text], 
.signup-form-content input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Style the sign up form buttons */
.signup-form-content button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}

/* Style the sign up form buttons on hover */
.signup-form-content button:hover {
  opacity: 0.8;
}

/* Style the sign up form links */
.signup-form-content .links {
  text-align: center;
  margin-top: 20px;
}

/* Style the sign up form links on hover */
.signup-form-content .links a {
  color: dodgerblue;
  text-decoration: none;
}

/* Style the sign up form links on hover */
.signup-form-content .links a:hover {
  color: #4CAF50;
}

.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  margin-top: 10vh;
}

.login-form {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.login-form button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}

.login-form button:hover {
  opacity: 0.8;
}

.login-form .links {
  text-align: center;
  margin-top: 20px;
}

.login-form .links a {
  color: #4CAF50;
  text-decoration: none;
}

.logo {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  width: 200px;
  text-align: center;
}
</style>
</head>
<body>

<div class="login-form">
    <h2>Login</h2>
    <form action="process/aprocess.php" method="post">
        <label for="email">Username:</label>
        <input type="text" id="email" name="email" placeholder="Your Username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Password" required>

        <button type="submit">Signin</button>
        <div class="links">
            <a href="#">Forget Password?</a>
            <a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
        </div>
    </form>
</div>

  <div class="logo">
    <h2>Logo</h2>
  </div>
</div>

<!-- The Modal (Signup Form) -->
<div id="signupForm" class="signup-form">
  <span onclick="closeSignUpForm()" class="close">&times;</span>
  <div class="signup-form-content">
    <h2>Sign Up</h2>
    <form>
      <label for="fname">Full Name:</label>
      <input type="text" id="fname" name="fname" placeholder="Your full name">

      <label for="nname">Nick Name:</label>
      <input type="text" id="nname" name="nname" placeholder="Your nick name">

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Your email">

      <label for="psw">Password:</label>
      <input type="password" id="psw" name="psw" placeholder="Your password">

      <label for="bdate">Birth Date:</label>
      <input type="date" id="bdate" name="bdate">

      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <button type="submit">Sign Up</button>
      <div class="links">
        <a href="login.php">Already have an account?</a>
      </div>
    </form>
  </div>
</div>


<script>
// Get the modal
var modal = document.getElementById("signupForm");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function openSignUpForm() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeSignUpForm() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
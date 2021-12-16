
<html lang="en">
 <head>
    <script src="script.js">
    </script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo_temp
    </title>
</head>
<Div class="header">
    <div class="logo"><img src="">Logo_here</div>
    <div class="c_name">Company name</div>
    <div class="Login_bar" type="button" onclick="openForm()">Login</div>
    <div class="Signup_bar" type="button" onclick="signupForm()">Sign Up</div>

    <div class="cart">Cart</div>
    <div class="search"><input type="text" placeholder="Search" ></div>
    <div class="nav-bar">
    <div class="menu_bar">
        <menu>Home</menu>
        <div class="dropdown-content"><p>Products</p></div>
    </div>
</div>
</Div>
</script> 

     <div class="form-popup" id="myForm">
      <form class="form-container" action="login.php" method="post">
        <h1>Login</h1>

        <label for="username"><b>UserName</b></label>
        <input type="text" placeholder="Enter Username"value="" name="username" id="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" value="" name="password" placeholder="Password" id="password" required> 

              <button class="btn" type="submit" value="submit">Login</button>
        <button type="button" class="btn cancel" onclick="closethisForm()">Close</button>
      </form>
    </div>
    
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closethisForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>
<!-- Sign_up form-->
<div class="form-popup" id="signupForm">
  <form class="form-container" action="signup.php" method="post">
    <h1>Login</h1>
    <label for="username"><b>FullName</b></label>
    <input type="text" placeholder="Enter Fullname"value="" name="fullname" id="fullname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="email" id="email" required> 


    <label for="username"><b>UserName</b></label>
    <input type="text" placeholder="Enter Username"value="" name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" value="" name="password" placeholder="Password" id="password" required> 

          <button class="btn" type="submit" value="submit">SignUp</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function signupForm() {
  document.getElementById("signupForm").style.display = "block";
}

function closeForm() {
  document.getElementById("signupForm").style.display = "none";
}
</script>
</html>




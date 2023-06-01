<?php
session_start();
include "db_connect.php";
// $error = "";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "select * from usertb where username='".$username."' and password='".$password."'";
   $r = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($r);
   $row = mysqli_fetch_assoc($r);

   if($count == 1)
   {
      $_SESSION['userid'] = $row['userID'];
      $_SESSION['username'] = $row['username'];

      if($_POST['username'] == "Admin")
      {
        header('location: admin.php');
        exit;
      }
      else
      {
        header('location:index.php');
        exit;
      }
   }
   else
   {
      // $error = "Invalid UserName or Password";
      echo'<script>alert("Invalid UserName or Password")</script>';
   }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Library</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="new.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="im/logo.jfif" alt="Library Logo">
      <span>Online Library</span>
    </div>
  </header>

  <section class="login-section">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
    <div class="signup-link">Not a member? <a href="registration.php">Sign up now</a></div>
  </section>

  <footer>
    <div class="footer-container">
      <div class="about-us">
        <h2>About Us</h2>
        <p>Welcome to the Online Library! We are dedicated to providing a seamless library experience for our users.</p>
      </div>
      <div class="contact-us">
        <h2>Contact Us</h2>
        <p>If you have any questions or feedback, feel free to reach out to us:</p>
        <ul>
          <li>Email: info@librarysystem.com</li>
          <li>Phone: 123-456-7890</li>
        </ul>
      </div>
    
      <div class="footer-col">
  <h4>Follow Us</h4>
  <div class="social">
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </div>
</div>
    </div>
    <br>
    
    <p>&copy; 2023 Online Library. All rights reserved.</p>
    
  </footer>
</body>
</html>
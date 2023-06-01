<?php 
   include "db_connect.php";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $phoneno = $_POST['phone_no'];

       $sql = "insert into usertb(username,password,email,phoneno) values('".$username."','".$password."','".$email."','".$phoneno."')";
       $r = mysqli_query($conn,$sql);

       header('location: login.php');
       exit;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Library- Registration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="new.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="im/logo.jfif" alt="Library Logo">
      <span>Online Library</span>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="login.php">login</a></li>
      </ul>
    </nav>
  </header>

  <section class="registration-form">
    <form action="" method="post" class="registration-form">
  <h2>Registration Form</h2>
  <!-- <div class="form-group">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first_name" required>
  </div>
  <div class="form-group">
    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last_name" required>
  </div> -->
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <!-- <div class="form-group">
    <label for="enrollment-no">Enrollment Number:</label>
    <input type="text" id="enrollment-no" name="enrollment_no" required>
  </div> -->
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="phone-no">Phone Number:</label>
    <input type="text" id="phone-no" name="phone_no" required>
  </div>
  <div class="form-group">
    <input type="submit" value="Register">
  </div>
</form>
<p>Already have an account?<a href="login.php">click here</a><p>
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
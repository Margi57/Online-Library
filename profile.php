<?php
include "db_connect.php";
session_start();

if(isset($_GET['cartid']))
{
   $cartid= $_GET['cartid'];

   $sql = "delete from carttb where cartID=".$cartid."";
   $r = mysqli_query($conn,$sql);

   header('location:profile.php');
   exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="new.css">
    <style>
  body {
    background-color: #f8f9fa;
  }

  .container {
    background-color: #fff;
    padding: 20px;
    border-radius:
  }
  .col-md-6{
    padding-left: 30px;
    }
  }
  table{
    position: absolute;
    top:50px;

  }
  #t1{
        margin: 40px;
        padding: 20px;
        padding:right;
        }
        table,tr{
        border-collapse: collapse;
        width: 30%;
        margin-top: 100px;
        margin-left: 20px;
        box-shadow: 0px 10px 15px #ccc;}
        #t1 td{
        padding: 30px;
        font-size: 20px;
        }
</style>
  </head>
  <body>
    <!-- Your content goes here -->
    <header><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="logo">
      <img src="im/logo.jfif" alt="Library Logo">
      </div>
  <a class="navbar-brand" href="#">Online Library</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      </nav>
  <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
      </nav>
    </header>
    <section>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <!-- Profile picture -->
      <img src="https://tse3.mm.bing.net/th?id=OIP.4_I4r2WoSSAiTKs4jM97lQHaHa&pid=Api&P=0&h=180" alt="Profile Picture" class="img-fluid rounded-circle">
    </div>
    <div class="col-md-6">
      <!-- Profile details -->
      <?php 
      $userid = $_SESSION['userid'];

          $sql = "select * from usertb where userID=".$userid."";
          $r = mysqli_query($conn,$sql);

          while($row = mysqli_fetch_assoc($r))
          {
            echo'
            <h3>'.$row['username'].'</h3>
            <p>'.$row['email'].'</p>
            <p>'.$row['phoneno'].'</p>
            ';
          }
      ?>
</div>
        </section>
<div class="container mt-4">
  <h3>Borrowed Books</h3>
  <table class="table">
    <thead>
    <tr>
                <th> No </th>
                <th>book</th>
                <th>authore</th>
                <th>Issue Date</th>
                <th></th>
                </tr>
      </thead>
    <tbody>
    <tbody>
        <?php 
        $userid = $_SESSION['userid'];
        $sql = "select * from carttb where userID=".$userid."";
        $r = mysqli_query($conn,$sql);
        $count = 1;
        while($row = mysqli_fetch_assoc($r))
        {
          echo'
          <tr>
             <td> '.$count++.'</td>
             <td> '.$row['bookname'].' </td>
             <td> '.$row['author'].'</td>
             <td> '.$row['date'].'</td>
             <td><a href="profile.php?cartid='.$row['cartID'].'"><button type="button" class="btnDelete"> Delete </button></a></td>
          </tr>
          ';
        }
        ?>
      

    </tbody>
  </table>
</div>
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
  <script>
      $(document).ready(function(){
        $(".btnDelete").on('click',function(){
          alert('Book Deleted Successfully');
        })
      })
    </script>
</body>
</html>
  


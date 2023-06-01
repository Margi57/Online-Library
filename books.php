<?php
include "db_connect.php";
session_start();
error_reporting(E_ERROR | E_PARSE);
$userid = $_SESSION['userid'];
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if($userid)
  {
    $book = $_POST['bo'];
    $author = $_POST['author'];
    $userid = $_SESSION['userid'];
  
    $sql = "insert into carttb(userID,bookname,author,date) values(".$userid.",'".$book."','".$author."',now())";
    $r = mysqli_query($conn,$sql);
  }
     if($r==1)
     {
       echo  "<script>alert('Book Added Successfully')
       window.location.assign('books.php')
       </script>";
     }
   
  
  else
  {
    echo'<script>alert("Please Login")</script>';
    header('location:login.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books - Online Library</title>
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
        <?php
           if($_SESSION['username'])
           {
            
             echo'<li><a href="profile.php">Profile</a></li>';
             echo'<li><a href="logout.php">logout</a></li>';
           }
           else
           {
           
            echo'<li><a href="login.php">login</a></li>';
          
           
           }
        ?>
        
      </ul>
    </nav>
  </header>

  <section class="books-section">
    <h2>Books</h2>
    <div class="book-list">

<!-- book1 -->
    <form action="" method="post">
      <div class="book">

        <img src="books/b1.webp" alt="Book 1">
        <h3>The Wager</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Wager">
          <input type="hidden" name="author" value="RD Sharma">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">
           
          <a href="b1.php" class="btn">View Books</a>
        </div>
      </div>
      </form>

<!-- book2 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b2.jpg" alt="Book 1">
        <h3>The Companion</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Companion">
          <input type="hidden" name="author" value="Katie Alender">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b2.php" class="btn">View Books</a>
        </div>
      </div>
      </form>

    
   <!-- book3 -->   
      
   <form action="" method="post">
      <div class="book">

        <img src="books/b3.jpg" alt="Book 1">
        <h3>Old Man and the Sea</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Old Man and the Sea">
          <input type="hidden" name="author" value="Ernest Hemingway ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b3.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book4 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b4.webp" alt="Book 1">
        <h3>The Success Paradox</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Success Paradox">
          <input type="hidden" name="author" value="Graeme Atherton ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b4.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
<!-- book5 -->
<form action="" method="post">
      <div class="book">

        <img src="books/b5.webp" alt="Book 1">
        <h3>A Broken Blade</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="A Broken Blade">
          <input type="hidden" name="author" value="Melissa Blair ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b5.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book6 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b6.webp" alt="Book 1">
        <h3>The Assassin's Blade</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Assassins Blade">
          <input type="hidden" name="author" value= "Sarah J. Maas ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b6.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book7 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b7.jpg" alt="Book 1">
        <h3>The Eye of Elektron</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Eye of Elektron">
          <input type="hidden" name="author" value= " Leigh G. Wynn ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b7.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book8 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b8.jpg" alt="Book 1">
        <h3>Crown of Midnight</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Crown of Midnight">
          <input type="hidden" name="author" value= "Sarah J. Maas">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b8.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book9 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b9.jpg" alt="Book 1">
        <h3>Cinder & Glass Hardcover</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Cinder & Glass Hardcover">
          <input type="hidden" name="author" value= "Melissa de la Cruz ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b9.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
       <!-- book10   -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b10.jpg" alt="Book 1">
        <h3>The Omnivore's Dilemma</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Omnivores Dilemma">
          <input type="hidden" name="author" value= " Michael Pollan ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b10.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book11 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b11.jpg" alt="Book 1">
        <h3>Magic Hour: A Novel</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Magic Hour: A Novel">
          <input type="hidden" name="author" value= "Kristin Hannah">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b11.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book12 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b12.jpg" alt="Book 1">
        <h3>I'll Stop the World: A Novel </h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="I will Stop the World: A Novel ">
          <input type="hidden" name="author" value= "Lauren Thoman">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b12.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
        <!-- book13 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b13.jpg" alt="Book 1">
        <h3>Fallen Foe (Cruel Castaways)</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Fallen Foe (Cruel Castaways)">
          <input type="hidden" name="author" value= " L.J. Shen">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b13.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book14 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b14.jpg" alt="Book 1">
        <h3>The Undoing Project</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Undoing Project">
          <input type="hidden" name="author" value= "Michael Lewis ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b14.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book15 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b15.jpg" alt="Book 1">
        <h3>Snow Angels #1</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Snow Angels #1">
          <input type="hidden" name="author" value= "Jeff Lemire ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b15.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book16 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b16.jpg" alt="Book 1">
        <h3>Beyond That, the Sea: A Novel</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Beyond That, the Sea: A Novel">
          <input type="hidden" name="author" value= "Laura Spence-Ash ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b16.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book17 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b17.jpg" alt="Book 1">
        <h3>Nimona: A Netflix Film</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Nimona: A Netflix Film">
          <input type="hidden" name="author" value= "ND Stevenson">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b17.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
        <!-- book18 -->
        <form action="" method="post">
      <div class="book">

        <img src="books/b18.jpg" alt="Book 1">
        <h3>The Quarry Girls: A Thriller</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Quarry Girls: A Thriller">
          <input type="hidden" name="author" value= " Jess Lourey ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b18.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book19 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b19.jpg" alt="Book 1">
        <h3>Layla</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="Layla">
          <input type="hidden" name="author" value= "  Colleen Hoover">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b19.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book20 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b20.jpg" alt="Book 1">
        <h3>From Blood and Ash</h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="From Blood and Ash">
          <input type="hidden" name="author" value= "Jennifer L. Armentrout ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b20.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
      <!-- book21 -->
      <form action="" method="post">
      <div class="book">

        <img src="books/b21.jpg" alt="Book 1">
        <h3>The Serpent and the Wings of Night </h3>
        
        <div class="book-buttons">
         
          <input type="hidden" name="bo" value="The Serpent and the Wings of Night ">
          <input type="hidden" name="author" value= " Carissa Broadbent  ">
          <input type="submit" class="btn btdadd" name="add" value="Add Book">

          <a href="b21.php" class="btn">View Books</a>
        </div>
      </div>
      </form>
        

    </div>
    
  </section>

  <footer>
    <div class="footer-container">
      <div class="about-us">
        <h2>About Us</h2>
        <p>Welcome to the Library Management System! We are dedicated to providing a seamless library experience for our users.</p>
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
    
    <p>&copy; 2023 Library Management System. All rights reserved.</p>
    
  </footer>
  <script>
      $(document).ready(function(){
        $(".btnadd").on('click',function(){
          alert('Book Added Successfully');
        })
      })
    </script>
</body>
</html>
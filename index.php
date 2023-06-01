<!DOCTYPE html>
<html>
<head>
    <title>Online Library</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="new.css">
    <!-- Custom CSS -->
    <style>
        .carousel-item {
            height: 400px;
            width: 1000px;
            position: relative;
            left: 200px;
            z-index: 10;
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: 50px;
        }
        .d-block{
            height: 400px;
            width: 1000px;
            position: relative;
            border: 1px solid black;
            border-radius: 100px;
            box-shadow: 0px 10px 10px;
        }
        
        /* Add your custom styles here */
        .feature-section {
            background-color: #f8f8f8;
            padding: 50px;
            text-align: center;
        }
        
        .feature-section h2 {
            color: #333;
        }
        
        .feature-section p {
            color: #777;
            margin-bottom: 30px;
        }
        
        .description-section {
            padding: 50px;
            text-align: center;
        }
        
        .description-section h2 {
            color: #333;
        }
        
        .description-section p {
            color: #777;
            margin-bottom: 30px;
        }
       .footer-col{
      justify-content: spaceBetween;
      margin: 20px;
       }
       
        
    </style>
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
        error_reporting(E_ERROR | E_PARSE);
        session_start();
        $userid = $_SESSION['userid'];
        if($userid)
        {
             echo'<li><a href="profile.php">Profile</a></li>';
             echo'<li><a href="logout.php">Logout</a></li>';
           }
           else
           {
            echo'<li><a href="login.php">Login</a></li>';
           }
        ?>
      </ul>
    </nav>
  </header>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="im/q1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="im/q2.webp" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="im/q3.jpg" class="d-block w-100" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="im/q4.webp" class="d-block w-100" alt="Image 4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="description-section">
    <div class="container">
      
      <a href="#" class="btn btn-primary">Services</a>

      <div id="book-borrowing" class="service">
        <h3>Book Borrowing</h3>
        <p>Our primary service is book borrowing, allowing users to access our extensive collection of books. Simply browse our catalog, choose the books you want, and check them out using your library account. Our user-friendly interface and efficient checkout process make borrowing books a breeze.</p>
      </div>

      <div id="online-resources" class="service">
        <h3>Online Resources</h3>
        <p>In addition to physical books, we offer a wide range of online resources. Through our digital library, you can access e-books, audiobooks, journals, research papers, and other digital materials from the comfort of your own device. Our online resources are available 24/7, giving you the flexibility to study and explore at your own convenience.</p>
      </div>

      <div id="reference-assistance" class="service">
        <h3>Reference Assistance</h3>
        <p>Our knowledgeable and friendly librarians are always ready to assist you with your research needs. Whether you require help finding specific resources, navigating databases, or conducting in-depth research, our librarians are here to guide you. Visit our reference desk or reach out to us through our contact channels to avail of personalized assistance.</p>
      </div>

      <div id="events-workshops" class="service">
        <h3>Events and Workshops</h3>
        <p>We believe in fostering a vibrant community of learners and book enthusiasts. That's why we organize a variety of events and workshops throughout the year. From author talks and book clubs to writing workshops and career development sessions, there's always something exciting happening at our library. Stay updated with our event calendar to make the most of these enriching opportunities.</p>
      </div>

      <div id="interlibrary-loan" class="service">
        <h3>Interlibrary Loan</h3>
        <p>While our library boasts an extensive collection, we understand that there may be occasions when you require resources not currently available in-house. In such cases, we offer an interlibrary loan service, allowing you to request materials from other libraries. Our dedicated team will make every effort to secure the resources you need, expanding your access to knowledge beyond our own catalog.</p>
      </div>
    </div>
  </section>

    <div class="description-section">
        <h2>Explore Our Collection</h2>
        <p>Our library offers a vast collection of books across various genres and subjects. Whether you're a student, researcher, or avid reader, you'll find something for every interest.</p>
        <a href="books.php" class="btn btn-primary">Browse Books</a>
    </div>
  </section>
  
  <footer>
    <div class="footer-container">
      <div class="about-us">
        <h2>About Us</h2>
        <p>Welcome toOnline Library System! We are dedicated to providing a seamless library experience for our users.</p>
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
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

include "db_connect.php";

?>
<html>
    <head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="new.css">
        <title> Admin Side </title>
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
        <!-- <li><a href="index.php">Home</a></li>
        <li><a href="books.php">Books</a></li>
        <li><a href="profile.php">Profile</a></li> -->
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
      </nav>
    </header>
    <section>
        <br><br>
        <h1> Admin Side </h1>

        <table>
    <thead>
    <tr>
                <th> No </th>
                <th> User ID </th>
                <th>book</th>
                <th>authore</th>
                <th>Issue Date</th>
                <th></th>
                </tr>
      </thead>
    <tbody>
    <tbody>
        <?php 
        $sql = "select * from carttb";
        $r = mysqli_query($conn,$sql);
        $count = 1;
        while($row = mysqli_fetch_assoc($r))
        {
          echo'
          <tr>
             <td> '.$count++.'</td>
             <td>'.$row['userID'].'</td>
             <td> '.$row['bookname'].' </td>
             <td> '.$row['author'].'</td>
             <td> '.$row['date'].'</td>
          </tr>
          ';
        }
        ?>
      

    </tbody>
  </table>
    </body>
</html>
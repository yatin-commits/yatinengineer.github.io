<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="contact-us.css">
    <link rel="stylesheet" href="Fonts.css">
    <title>Contact Us - Entrance Jugaad</title>
  </head>
  <body>
  <div id="preloader"></div>

<script>
  window.addEventListener('DOMContentLoaded',function()
  {
    loader=document.getElementById('preloader');
  setTimeout(() => {  
  $('#preloader').fadeOut('fast');  
}, 4000);

  })
  </script>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light stroke">
        <div class="container-fluid">
          <div class="logo-div">
            <a class="navbar-brand text-light" href="./index.html">ENTRANCE JUGAAD</a>
          </div>
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end navibar" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar">
              <a class="nav-link text-light" aria-current="page" href="./index.html">Home</a>
              <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Preapre for</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="nav-item dropdown" id="myDropdown">
                  <li><a class="dropdown-item text-center text-white" href="./bca/index.html">BCA</a></li>
                  <li><a class="dropdown-item text-center text-white" href="./bba/index.html">BBA</a></li>
                  <li><a class="dropdown-item text-center text-white" href="./bcom/index.html">BCOM</a></li>
              </ul>
              <a class="nav-link text-light" href="./about.html">About Us</a>
              <a class="nav-link text-light active" href="./contact-us.html">Contact Us</a>
            </div>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    <?php
      $servername = "localhost";
      $username = "yatineng_yatin";
      $pass = "yatin@123";
      $dbname = "yatineng_entrance";
      $conn = mysqli_connect($servername, $username, $pass, $dbname);
      If($conn)
      {
      Echo " <br>";
      }
      Else
      {
      die ("connection failed ".mysqli_connect_error());
      }
      //include_once 'process.php';
      if(isset($_POST['save']))
      {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
      
      $result=(mysqli_query($conn, $sql));
      if($result){ 
        echo'<div class="box">
        <div class="child" >
        <img src="../images/tick.gif" alt="" height="300px">
        <h1>THANKS!</h1>
        <h2>Your Response Has Been Submitted!</h2>
        <input type="submit" class="tick" value="BACK TO HOME"> 
    </div>
    </div>';
      
          exit;
      } 
      else
      // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      // <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
      // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      //   <span aria-hidden="true">×</span>
      // </button>
      // </div>';

      echo'<div class="box">
      <div class="child" >
      <img src="../images/tick.gif" alt="" height="300px">
      <h1>THANKS!</h1>
      <h2>Your Response Has Been Submitted!</h2>
      <input type="submit" value="BACK TO HOME">
  </div>
  </div>';


      mysqli_close($conn);
      }
      ?>
      <!-- top-part -->
      <div class="top-part">
        <div class="margin">
      <p class="h1 text-center">Have Any Suggestion/ Or Any Query?</p>
      <br>

      <!-- php -->


     
      
      <!-- php -->


      <div class="container contact-clearfix">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="imgAbt img-top">
                    <img src="./images/home_contact.jpg" class="img-fluid"/>
                </div>
            </div>
         <div class="col-md-6 col-xs-12 form-con" data-aos="fade-up">
           <form action="" id="form" class="form-contact" method="post">
            <p class="h3">Fill Out These Form We'll ContactYou As Soon As Possible</p>
            <br>
            <input type="text" name="name" id="name" class="form-contrl" placeholder="Enter Your Name" required>
            <br><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
            <br><br>
            <textarea name="message" id="message" cols="30" rows="1" placeholder="Your Message" required></textarea>
            <br><br>
            <input type="submit" value="Submit" name="save">
           </form>
         </div>
        </div>
    </div>
      </div>
    </div>
    <br><br>
      <!-- top part -->

      

      <!-- footer -->
    <footer>
        <br>
        <p class="h6 text-center">&#169; ALL RIGHT RESERVED</p>
      <br>
      </footer>
      <!-- footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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
include_once 'process.php';
if(isset($_POST['save']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";

$result=(mysqli_query($conn, $sql));
if($result){ 
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>';

    exit;
} 
else
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>
</div>';
mysqli_close($conn);
}
?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

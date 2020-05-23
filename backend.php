<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Market_Duniya";
$subscriber_email = $_POST['subscriber_email'];
$subscriber_password = $_POST['subscriber_password'];
$subscriber_fname=$_POST['subscriber_fname'];
$subscriber_lname=$_POST['subscriber_lname'];
$subscriber_gender=$_POST['subscriber_gender'];
$subscriber_city=$_POST['subscriber_city'];
$subscriber_country=$_POST['subscriber_country'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscriber_details (subscriber_fname,subscriber_lname,subscriber_email, subscriber_gender, subscriber_city, subscriber_country, subscriber_password)
VALUES ('$subscriber_fname','$subscriber_lname','$subscriber_email','$subscriber_gender','$subscriber_city','$subscriber_country','$subscriber_password')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


if(isset($_POST['submit']))
{

  echo "hi  !".$subscriber_fname;
?>
<br>
<a class="nav-link" href="webpage1.php">Home</a>
<?php

}

else
{
  echo "You need to login";
  ?>
  <a class="nav-link" href="login.html"></a>
  <?php
}
$conn->close();
?>
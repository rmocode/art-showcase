<!--adds a new post to a simple table within a MySQL database and redirects to
viewBlog.php. -->
<?php

//get post variables from page

$firstname = $_POST['firstname'];
$lastname = $POST['lastname']
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//mnake connection to mysql server with hostname,username,password and database
$conn = new mysqli('localhost', 'root','','posts');
  //check connection
if (!$conn){
  die("Connection failed: " . $conn->connect_error);
}

//query inserting records to table
$sql = "INSERT INTO artusers (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname','$email', '$username','$password')";


if(!mysqli_query($conn, $sql))
{
 die("Error inserting records".$conn->connect_error);
 header("Location: signup.html");

}
else{
  header("Location: login.html");
}

?>

</html>
<?php session_start();?>
<?php
$servername = "localhost";
$username = "root";
$password = "randompasswd";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['uname'];
$password = $_POST['psw'];

$query = "select * from loginInfo where uname ='$username' and pwd ='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)==1)
{
 $_SESSION["authenticate"] = true;
  echo '<script>window.location.href="editor.php"</script>';
}
else{
  echo "Wrong Username or Password";
}
?>

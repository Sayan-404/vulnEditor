</html>
<?php
$username = $_POST['uname'];
$password = $_POST['psw'];

if($username=="usr" and $password=="psw")
{
  echo '<script>window.location.href="editor.php"</script>';
}
else{
  echo "Wrong Username or Password";
}
?>

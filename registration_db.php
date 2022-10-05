<? php
include ("db_coonect.php);
if(isset($_POST["signup"]))
{
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$query="insert into login(username,password,email) values($username,$password,$email)";
if(mysqli_query ($conn,$query))
{
echo "Registration successful!";
}
else{
echo "Registration unsucccessful";
}
?>

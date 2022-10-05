<? php
include("db_connect,php");
if(isset($_POST["signin]))
{
$username=$_POST["username"];
$pasword=$_POST["password"];
$query="select from login where username='$username' and password='$password'";
$result= mysqli_query($conn,$query);
$row=mysqli_fetch_aray($result);
if($row['username']==$username & $row['pasword']=$password)
{
echo "Login successful";
echo "Welcome".$username;
}
else{
echo "Provide correct details";
}
mysqli_close($conn)
?>


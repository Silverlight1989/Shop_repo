<?
$connect = mysqli_connect("localhost","root","","shop");

$login = strip_tags($_POST['login']);
$pass = strip_tags($_POST['pass']);

$sql = "select * from users where login = '$login' and pass='$pass'";
$res = mysqli_query($connect,$sql);

if(mysqli_num_rows($res)>0){
	echo "User access allowed!";  	
}
else{
	echo "Error";
}

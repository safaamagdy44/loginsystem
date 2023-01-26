<?php
echo "log in";



$db=mysqli_connect("localhost","root","","fs8");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$querry="SELECT `id` FROM `users` WHERE username='$username' AND  password='$password' AND email='$email'";

$saf=mysqli_query($db,$querry);
while($s=mysqli_fetch_assoc($saf)){
    $ar=$s;// انا عايزه حد واحد لو عايزه array []كنت هحط
}
echo "<pre>";
print_r($ar);



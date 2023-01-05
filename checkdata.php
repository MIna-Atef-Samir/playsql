<?php 
include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$image = $_FILES['image'];

$imagename = $_FILES['image']['name'];
$imageloc = $_FILES['image']['tmp_name'];
$t = time();

$newloc = "images/$t$imagename";

move_uploaded_file($imageloc , $newloc);


$q = "INSERT INTO workers( name, email, password, date, image) VALUES ( '$name' , '$email' , '$password' , Now() , '$newloc')";

$insert = $conn->query($q);

if($insert){
    header('Location: show.php');
}

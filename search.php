<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<head/>
<body>
<div class="h-100  mh-100 mb-2 bg-dark text-white">


<?php 

session_start();
if (!isset($_GET['name'])){
    header('Location:index.php');
    exit();
}

require 'data.php';
$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_errno)
{
    die ($conn->connect_error);
    
}
else{


$input = $_GET['name']; //data from form 

$sql = "SELECT * FROM users where name='$input' "; //sql query

 $result = @$conn->query($sql);


$row = $result->fetch_assoc();




$_SESSION['name'] = $row['name'];

header('Location:profile.php');





//echo $Session['name'] = $row['name'];
//$row['email']; 


   // header('Location: index.php');
}
$conn->close();
?>	

<div/>
<body/>
<html/>
<html>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   #link rel-stylesheet href=style.css>

<head>
<body>
  <div class="h-100  mh-100 mb-2 bg-dark text-white">
      <?php
      session_start();
      if(!isset($_SESSION['logged']))
      {
         header("location:index.php");

      }
      

      
      echo "Welcome ";
      echo $_SESSION['name'];
      ?>
      <form action='uitloggen.php' method=post>
      <input type=submit value='uitloggen'/>
      <form/>
      <form method=post action=profile.php>
         <input name=comment>
         <input type=submit value="post comment"/>
         <form/>
	<div/>
<body/>
<html/>
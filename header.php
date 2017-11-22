<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" jnj">
    <meta name="author" content="Mohamed Khaled">
    <link rel="icon" href="GitHub.png">

    <title>Github users | <?php
    $page_cont = $_SESSION[$page];
    echo $page_cont ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 </head>

  <body>

    <nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GitHub User Profile</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="item" id ="home"> <a href="index.php" > Home </a> </li>
            <li> <a class="item" href="about.php" id="about" > About </a> </li>
            <li> <a class="item " href="users.php" id="users" > Users </a> </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

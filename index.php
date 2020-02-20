<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div id="mySidenav" class="sidenav">
    <div class="school-logo"><img src="PUPLogo.png"></div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Dashboard</a>
  <a href="#">Course</a>
  <a href="#">Calendar</a>
  <a href="#">Announcement</a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <!-- Use any element to open the sidenav -->
<span onclick="openNav()"><div class="menu"></div><div class="menu"></div><div class="menu"></div></span>
</nav>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  Main content
</div>
<script src="index.js"></script>
</body>
</html>
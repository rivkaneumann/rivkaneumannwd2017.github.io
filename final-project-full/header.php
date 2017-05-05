<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Kiddush Club - Homepage</title>
  <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="slider/jquery.bxslider.css" rel="stylesheet" type="text/css" />

     <link rel=icon href="favicon.ico?v=2" />
 <link href="main.css" rel="stylesheet">
</head>
<body>
   <nav class="navbar navbar-default navbar-main">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand visible-xs" href="#"><img class="logo" src="content/images/kiddush-club-logo.gif" alt="Logo"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                  <li <?=($page=="page1")? "class='active'" : "" ?>><a href="index.php">Home</a></li>
                    <li <?=($page=="page2")? "class='active'" : "" ?>><a href="services.php">Services</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            <div class="navbar-brand hidden-xs">
                <a href="#">
                    <img class="logo" src="content/images/kiddush-club-logo.gif" alt="Logo">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li <?=($page=="page3")? "class='active'" : "" ?>><a href="menus.php">Menus</a></li>
                <li><a href="index.php#testimonials">Testimonials</a></li>
                <li><a href="index.php#contact">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid --></nav>

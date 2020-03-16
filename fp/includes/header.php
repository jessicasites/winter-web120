<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/collapsible.css" />
<link rel="stylesheet" href="css/fontawesome-all.min.css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.collapsible.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <h1><a href="index.php">Logo goes here</a></h1>
    </div>
    <div class="wrapper">
<nav id="cssmenu">
  <ul>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
     <li><a href="services.php"><span><i class="fas fa-map tm-nav-fa-icon"></i> Services</span></a></li>
     <li><a href="workplace.php"><span><i class="fas fa-users tm-nav-fa-icon"></i> Workplace Massage</span></a></li>
     <li><a href="contact.php"><span><i class="fas fa-comments tm-nav-fa-icon"></i> Contact</span></a></li>
    </ul>
</nav>
    </div>
</header>
<section>
 <h2 class="pageID"><?=$PageID?></h2>
<?php  include 'config.php'?>
<!doctype html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?=$title?></title>

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   <script src="../fp/js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../fp/css/styles.css">
   <link rel="stylesheet" href="../fp/css/main.css">
   <link rel="stylesheet" href="../fp/css/formfp.css">
</head>
<body> 
    <a href="index.php">
        <div class="bg"></div>
        </a>
<div class="caption"> <!--add this in a <header></header> tag if this does not work????-->
    <span class="border">Fernanda</span>
    <br>
    <span class="border">Crivici</span>
</div>    
<div id="cssmenu">
  <ul>
     <li class="active"><a href="index.php"><span><i class="fa fa-fw fa-home"></i>Home</span></a></li>
     <li class="has-sub"><a href="about.php"><span>About</span></a>
        <ul>
           <li><a href="contact.php"><span>Contact Me</span></a></li>
           <li><a href="faq.php"><span>FAQ</span></a></li>
        </ul>
     </li>
     <li><a href="https://lactationlink.com/blog/"><span>Blog</span></a></li>
     <li><a href="services.php"><span>Services &amp; Fees</span></a></li>
  </ul>
    </div>    
    <div>
        <h2 class="pageID"><?=$PageID?></h2>
    </div>
    
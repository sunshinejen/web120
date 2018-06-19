<?php
/*
portal config.php

Used to store all of our WEB120 configuration information

*/
//this help elimates PHP date errors
date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//Here are the keys for Jens Server
$siteKey = "6LcEEVUUAAAAAMAU4whZpmONIRYRBPOvZS5PhDY9";
$secretKey = "6LcEEVUUAAAAAKSx2dZYQG9hLdc2ETmn03ExA7w-";

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Home";    
        $PageID = 'Resources for Mothers';
    break;
        
    case 'about.php':
        $title = "About";
        $PageID = 'About Me';
    break;
        
        case 'contact.php':
        $title = "Contact Me";    
        $PageID = 'Contact Fernanda Crivici';
    break;
        
        case 'faq.php':
        $title = "FAQ's";    
        $PageID = 'FAQs';
    break;
        
        case 'blog.php':
        $title = "blog";
        $PageID = 'Blog';
    break;
        
        case 'services.php':
        $title = "Services";
        $PageID = 'Services &amp; Fees';
    break;
        
        case 'disclaimer.php':
        $title = "blog";
        $PageID = 'Disclaimer';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = '';
        
        
}
    

?>
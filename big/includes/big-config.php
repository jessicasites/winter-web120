<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');



//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE){

    case 'index.php':
        $title = "Web Dev Examples and Research by Jessica Sites";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
    case 'galleries.php':
        $title = "Gallery Research";
        $logo = '';
        $PageID = 'Gallery Research';
    break;
    case 'shoppingcarts.php':
        $title = "Shopping Cart Research";
        $logo = '';
        $PageID = 'Shopping Cart Research';
    break;
    case 'siteapp.php':
        $title = "Responsive vs Mobile App";
        $logo = '';
        $PageID = 'Responsive vs Mobile App';
    break;
    case 'map.php':
        $title = "Google Map";
        $logo = '';
        $PageID = 'Google Map';
    break;case 'calendar.php':
        $title = "Google Calendar";
        $logo = '';
        $PageID = 'Google Calendar';
    break;case 'youtube.php':
        $title = "Youtube Video";
        $logo = '';
        $PageID = 'Youtube Video';
    break;
    case 'webcam.php':
        $title = "Live Web Cameras";
        $logo = '';
        $PageID = 'Live Web Cameras';
    break;
    

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
   }


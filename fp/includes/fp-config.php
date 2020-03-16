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
        $title = "Welcome";
        $logo = 'fa fa-fw fa-home';
        $PageID = 'Welcome';
    break;
    case 'services.php':
        $title = "Services";
        $logo = 'fas fa-map tm-nav-fa-icon';
        $PageID = 'Services';
    break;
    case 'workplace.php':
        $title = "Workplace Massage";
        $logo = 'fas fa-users tm-nav-fa-icon';
        $PageID = 'Workplace Massage';
    break;
    case 'contact.php':
        $title = "Contact";
        $logo = 'fas fa-comments tm-nav-fa-icon';
        $PageID = 'Contact';
    break;
    
    
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
   }


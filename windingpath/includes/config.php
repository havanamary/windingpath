<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: havanamarys.com
$siteKey = "6LfeQCITAAAAACuWdmmlFxn0qfLfh6G5z6aemoW8";
$secretKey = "6LfeQCITAAAAABBcj7gEQhwG5Yfd89-Da-KIXBM3";

//Here we avoid date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'About'; 
        $icon = 'about.png';
    break;
    
    case 'services.php':
        $title = 'Services'; 
        $icon = 'home.png';
    break;
    
    case 'resources.php':
        $title = 'Resources';  
        $icon = 'home.png';
    break;
    
    case 'contact.php':
        $title = 'Contact';
        $icon = 'home.png';
        
    break;   
    case 'disclaimer.php':
        $title = 'Disclaimer';
        $icon = 'home.png';
    break;    
       
    default:    
        $title = THIS_PAGE; 
        $icon = 'home.png';
}

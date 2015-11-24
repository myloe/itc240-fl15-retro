<?php
//config.php

define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

//database credentials here
include 'credentials.php';

include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

/* automatic path settings - use the following path settings for placing all code in one application folder */ 
define('VIRTUAL_PATH', 'http://example.com/retro/'); # Virtual (web) 'root' of application for images, JS & CSS files
define('PHYSICAL_PATH', '/home/horsey01/retro/'); # Physical (PHP) 'root' of application for file & upload reference
define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

//This defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//this allows us to add unique info to our pages
switch(THIS_PAGE)
{
    case "template.php":
        $title = "My Template Title Tag";
        $pageID = "My Template Page ID";
        break;

    case "daily.php":
        $title = "Daily Special!";
        $pageID = "Daily Special";
        break;

   case "index.php":
        $title = "Retro Diner";
        $pageID = "Welcome to Retro Diner!";
        break;
   case "contact.php":
        $title = "Contact";
        $pageID = "Contact Us!";
        break;
        
   case "data1.php":
        $title = "Our first Data Page";
        $pageID = "Customer Data";
        break;

   case "travel_list.php":
        $title = "Travel locations";
        $pageID = "Top 25 places to travel!";
        break;
        
   default:
        $title = THIS_PAGE;
        $pageID = "Retro Diner";


}//end switch



//Here are our navigation pages:
$nav1['index.php'] = 'Home';
$nav1['template.php'] = 'Template';
$nav1['daily.php'] = 'Daily';
$nav1['contact.php'] = 'Contact';
$nav1['travel_list.php'] = 'Travel';
/*


				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>


foreach($nav1 as $link => $label)
{
    echo "link is $link and label is $label<br />";

}
*/


//echo $title;

//die;

/*
Creates links inside the header.php file

<li><a href="LINK">LABEL</a></li>

<li class="active"><a href="LINK">LABEL</a></li>




*/
function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
    $myReturn = '';
    foreach($arr as $link => $label)
    {
        if(THIS_PAGE == $link)
        {//current file gets active class
            $myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>' .$suffix;
        }else{
            $myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' .$suffix;

        }

    }

    return $myReturn;
}//end makeLinks()

/*
Allows us to send an email that respects the server domain spoofing polices of
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo='','html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />';
}

*/
function safeEmail($to, $subject, $message, $replyTo = '',$contentType='text')
{
    $fromAddress = "Automated Email <noreply@" . $_SERVER["SERVER_NAME"] . ">";

    if(strtolower($contentType)=='html')
    {//change to html format
        $contentType = 'Content-type: text/html; charset=iso-8859-1';
    }else{
        $contentType = 'Content-type: text/plain; charset=iso-8859-1';
    }

    $headers[] = "MIME-Version: 1.0";//optional but more correct
    //$headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = $contentType;
    //$headers[] = "From: Sender Name <sender@domain.com>";
    $headers[] = 'From: ' . $fromAddress;
    //$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
    //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";

    if($replyTo !=''){
        $headers[] = 'Reply-To: ' . $replyTo;
    }


    $headers[] = "Subject: {$subject}";
    $headers[] = "X-Mailer: PHP/". phpversion();

    $headers = implode(PHP_EOL,$headers);


    return mail($to, $subject, $message, $headers);

}//end safeEmail()

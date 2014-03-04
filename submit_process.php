<?php
/********************************************************
 *
 *	phpAbstracts
 *  http://www.phpabstracts.com
 *
 *  For copyright and license information, see readme.txt
 *
*********************************************************/



	//Include commonly used variables
	include('vars.php');
	
	//Database Connection Variables
	include('db.php');
	
	mysql_connect($host,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	mysql_query("set names utf8");
	
	
	//Capture form fields to variables
	
	$title          = mysql_real_escape_string($_POST['title']);
	$author1	    = mysql_real_escape_string($_POST['author1']);
	$organization1	= mysql_real_escape_string($_POST['organization1']);
	$author2	    = mysql_real_escape_string($_POST['author2']);
	$organization2	= mysql_real_escape_string($_POST['organization2']);
	$author3	    = mysql_real_escape_string($_POST['author3']);
	$organization3	= mysql_real_escape_string($_POST['organization3']);
	$author4        = mysql_real_escape_string($_POST['author4']);
	$organization4  = mysql_real_escape_string($_POST['organization4']);
	$author5        = mysql_real_escape_string($_POST['author5']);
	$organization5  = mysql_real_escape_string($_POST['organization5']);
	$author6        = mysql_real_escape_string($_POST['author6']);
	$organization6  = mysql_real_escape_string($_POST['organization6']);
	$format         = mysql_real_escape_string($_POST['format']);
	$language       = mysql_real_escape_string($_POST['language']);
	$presenter      = mysql_real_escape_string($_POST['presenter']);
	$background     = mysql_real_escape_string($_POST['background']);
	$purpose        = mysql_real_escape_string($_POST['purpose']);
	$methods        = mysql_real_escape_string($_POST['methods']);
	$findings       = mysql_real_escape_string($_POST['findings']);
	$conclusion     = mysql_real_escape_string($_POST['conclusion']);
	$word_count     = mysql_real_escape_string($_POST['word_count']);
	$name           = mysql_real_escape_string(mysql_real_escape_string($_POST['name']));
	$email1         = mysql_real_escape_string($_POST['email1']);
	$email2         = mysql_real_escape_string($_POST['email2']);
	$phone1         = mysql_real_escape_string($_POST['phone1']);
	$phone2         = mysql_real_escape_string($_POST['phone2']);
	$fax            = mysql_real_escape_string($_POST['fax']);
	$address        = mysql_real_escape_string($_POST['address']);
	$topic          = mysql_real_escape_string($_POST['topic']);
	$country        = mysql_real_escape_string($_POST['country']);
	
	$date = date("F j, Y, g:i a");
	
	
    $background = str_replace('\r\n', "\n", $background);
    #print $background;
    #print "<br>=====================<br>";
    #print str_replace('\r\n', "\n", $background);
    #exit(0);
	
	
	//Store into database
	
	$query = "INSERT INTO abstracts VALUES ('', '$date', '$title', '$author1', '$organization1', '$author2', '$organization2', '$author3', '$organization3', '$author4', '$organization4', '$author5', '$organization5', '$author6', '$organization6', '$format', '$language', '$presenter', '$background', '$purpose', '$methods', '$findings', '$conclusion', '$word_count', '$name', '$email1', '$email2', '$phone1', '$phone2', '$fax', '$address', '$topic', '$country', 'Unfiled', '', '' )";
	mysql_query($query) or die(mysql_error() . " " . $query); 
		
	
	// Grab ID Number
	$abstract_id = mysql_insert_id();	
	
	
	mysql_close();
	
	
	
		
	//Send e-mail to recipient
	
	$to2 = $email1;
	$subject2 = "Abstract Submission Form: " . $abstract_id;
	$body2 = $date . "\nAbstract ID: " . $abstract_id . 
			"\n\nThank you for your abstract submission. We acknowledge receipt." . 
			"\n\nPlease note your Abstract ID above. A copy of your abstract is included below. " . 
			"\n\nThank you." .
			"\n\nTITLE\n" . $title . "\n\nAUTHORS\nAuthor 1: " . $author1 . "\nOrganisation 1: " . $organization1;		
	if ($author2)
		$body2 = $body2 . "\nAuthor 2: " . $author2 . "\nOrganization 2: " . $organization2;
	if ($author3)
		$body2 = $body2 . "\nAuthor 3: " . $author3 . "\nOrganization 3: " . $organization3;
	if ($author4)
		$body2 = $body2 . "\nAuthor 4: " .$author4 . "\nOrganization 4: " . $organization4;
	if ($author5)
		$body2 = $body2 . "\nAuthor 5: " .$author5 . "\nOrganization 5: " . $organization5;
	if ($author6)
		$body2 = $body2 .	"\nAuthor 6: " . $author6 . "\nOrganization 6: " . $organization6;		
	$body2 = $body2 . "\n\nPRESENTATION\nFormat: " . $format . "\nLanguage: " . $language . "\nPresenter: " . $presenter .
			"\n\nCONTENT\nTopic: " . $topic . "\nCountry: " . $country . "\n\nBackground: " . 
			$background . "\n\nPurpose: " . $purpose . "\n\nMethods: " .
			$methods . "\n\nFindings: " . $findings . "\n\nConclusion: " . $conclusion . 
			"\n\nTotal Words: " . $word_count . "\n\nCONTACT INFORMATION\nName: " . $name . "\nE-mail 1: " . $email1 . 
			"\nE-mail 2: " . $email2 . "\nOffice Phone: " . $phone1 . "\nCell Phone: " . $phone2 .
			"\nFax: " . $fax . "\nAddress: " . $address;		
	
	$from = $site_email;
	$headers = "From: $from";
	
	mail($to2, $subject2, $body2, $headers);
	
?>



	<!--Output confirmation-->
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	
	
	<head>
	
		<title><?php echo $site_title; ?></title>
		<link href="css/abstracts.css" rel="stylesheet" type="text/css" />
	 
	</head>
	
	
	<body>
	
		<div id="header" class="top_container">
            <img src="images/logo.gif">
        </div>
	
	
		 <div class="centering_container" id="main_container" >
	
			<h1>Thank you!</h1>
	
							
			<p>Thank you for your abstract submission titled "<?php echo $title; ?>".</p>
            <p>Your Abstract ID Number is: <?php echo $abstract_id; ?></p>
            <p>You will receive an e-mail confirmation shortly.</p>
        </div>       
        
            
    </body>
    
    
    </html>

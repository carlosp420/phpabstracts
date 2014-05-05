<?php
/********************************************************
 *
 *	phpAbstracts
 *  http://www.phpabstracts.com
 *
 *  For copyright and license information, see readme.txt
 *
*********************************************************/

	//Include header template
	include('header.php');
	
	//Only ADMINs can view this page
	if ($admin) {
		
		//Database Connection Variables
		include('db.php');
		
		//Connect to database
		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");

		//Capture form fields to variables
		$abstract_id = $_POST['abstract_id'];
		$title = mysql_real_escape_string($_POST['title']);
		$author1 = mysql_real_escape_string($_POST['author1']);
		$organization1 = mysql_real_escape_string($_POST['organization1']);
		$author2 = mysql_real_escape_string($_POST['author2']);
		$organization2 = mysql_real_escape_string($_POST['organization2']);
		$author3 = mysql_real_escape_string($_POST['author3']);
		$organization3 = mysql_real_escape_string($_POST['organization3']);
		$author4 = mysql_real_escape_string($_POST['author4']);
		$organization4 = mysql_real_escape_string($_POST['organization4']);
		$author5 = mysql_real_escape_string($_POST['author5']);
		$organization5 = mysql_real_escape_string($_POST['organization5']);
		$author6 = mysql_real_escape_string($_POST['author6']);
		$organization6 = mysql_real_escape_string($_POST['organization6']);
		$author7 = mysql_real_escape_string($_POST['author7']);
		$organization7 = mysql_real_escape_string($_POST['organization7']);
		$author8 = mysql_real_escape_string($_POST['author8']);
		$organization8 = mysql_real_escape_string($_POST['organization8']);
		$author9 = mysql_real_escape_string($_POST['author9']);
		$organization9 = mysql_real_escape_string($_POST['organization9']);
		$author10 = mysql_real_escape_string($_POST['author10']);
		$organization10 = mysql_real_escape_string($_POST['organization10']);
		$format = mysql_real_escape_string($_POST['format']);
		$language = mysql_real_escape_string($_POST['language']);
		$presenter = mysql_real_escape_string($_POST['presenter']);
		$topic = mysql_real_escape_string($_POST['topic']);
		$country = mysql_real_escape_string($_POST['country']);
		$background = mysql_real_escape_string($_POST['background']);
		$purpose = mysql_real_escape_string($_POST['purpose']);
		$methods = mysql_real_escape_string($_POST['methods']);
		$findings = mysql_real_escape_string($_POST['findings']);
		$conclusion = mysql_real_escape_string($_POST['conclusion']);
		$name = mysql_real_escape_string($_POST['name']);
		$email1 = mysql_real_escape_string($_POST['email1']);
		$email2 = mysql_real_escape_string($_POST['email2']);
		$phone1 = mysql_real_escape_string($_POST['phone1']);
		$phone2 = mysql_real_escape_string($_POST['phone2']);
		$fax = mysql_real_escape_string($_POST['fax']);
		$address = mysql_real_escape_string($_POST['address']);
		
		$last_edit = date("F j, Y, g:i a");
		
		
		
		//Update details for this user
		$query = "UPDATE abstracts SET " . 
				 "title='$title', " . 
				 "author1='$author1', organization1='$organization1', " .
				 "author2='$author2', organization2='$organization2', " . 
				 "author3='$author3', organization3='$organization3', " . 
				 "author4='$author4', organization4='$organization4', " . 
				 "author5='$author5', organization5='$organization5', " . 
				 "author6='$author6', organization6='$organization6', " . 
				 "author7='$author7', organization7='$organization7', " . 
				 "author8='$author8', organization8='$organization8', " . 
				 "author9='$author9', organization9='$organization9', " . 
				 "author10='$author10', organization10='$organization10', " . 
				 "format='$format', language='$language', presenter='$presenter', topic='$topic', country='$country', " .
				 "background='$background', purpose='$purpose', methods='$methods', findings='$findings', conclusion='$conclusion', " . 
				 "name='$name', email1='$email1', email2='$email2', phone1='$phone1', phone2='$phone2', fax='$fax', address='$address', " .
				 "last_edit='$last_edit' " . 
				 "WHERE abstract_id = '$abstract_id'";
		mysql_query($query) or die(mysql_error());
		
		//Close database
		mysql_close();
		
	
		//Print confirmation
		
		echo "<br /><br /><br />" . 
				 "<div class='statusbox'>" . 
				 "<p>Abstract ID '" . $abstract_id . "' has been successfully edited.</p>" . 
				 "<p><a href='list.php'>Return " . $home_title . "</a></p>" .
				 "</div>". 
				 "<br /><br /><br />";
	
	}//end if
			 
	//Include footer template
	include('footer.php'); 

?>

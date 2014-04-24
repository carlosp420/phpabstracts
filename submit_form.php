<?php
	header('Content-Type: text/html; charset=utf-8');
	//Include commonly used variables
	include('vars.php');
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--
/************************************************************************
 *
 *  phpAbstracts
 *  http://www.phpabstracts.com
 *
 *  Copyright (c) 2008 Omar Qazi
 *
 *  phpAbstracts is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  phpAbstracts is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with phpAbstracts.  If not, see <http://www.gnu.org/licenses/>. 
 *
************************************************************************/
-->

<head>

    <title><?php echo $site_title; ?></title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript" src="js/submit_form.js"></script>
    <script type="text/javascript">
		//for submit_form.js
		var countsuffix = "_words";
		var remainingwords = "words_remaining";
        total_limit = <?php echo $total_words_limit; ?>;
    </script>
    <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css">
    <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/abstracts.css">
</head>


<body>
  <div class="page-container">
    <div class="header">
  
      <div class="header-top">
	  <a class="sitelogo" href="#" title="Conference Logo"></a>
	  
	  <div class="sitename">
	    <h1 class="pagetitle"><a href="../index.html" title="Go to Start page">7th International Conference on the Biology of Butterflies</a></h1>
	    <h2>August 11-14, 2014 in Turku, Finland</h2>
	  </div>
      </div>
      
      <div class="header-middle">
      </div>
      
      <!-- A.3 HEADER BOTTOM -->
      <div class="header-bottom">
      
<!-- Navigation Level 2 (Drop-down menus) -->
        <div class="nav2">&nbsp;
        </div>
      </div>
	  
	  <!-- Breadcrumbs -->
      <div class="header-breadcrumbs">
      </div>
      
      
    </div>
    
    <div class="main">
      <div class="main-content">
	<h1>Submit an Abstract</h1>
	
	<p>Abstracts are limited to 300 words. Text and author information should be entered into the fields below. 
        It is NOT possible to save partially completed abstracts. Therefore, it is recommended that the complete document 
        be prepared and finalised in a word processor, then cut and pasted into the appropriate fields.</p>
        
        <p style="font-weight:bold;">Please note that it will not be possible to edit an abstract after it has been 
        submitted.</p>
        
        <br />
        
        <form id="abstract_submit_form" name="abstract_submit_form" method="post" action="submit_process.php" 
        class="aform" onsubmit="return validate(this)">
        
        
            <h3>Abstract Title</h3>
            
            <p>Enter the title of your abstract.</p>
        
                <label for="title">Title</label>
                    <input type="text" name="title" id="title" size="40" maxlength="250" />
                <br />
            
            <br />
            
            <h3>Author(s)</h3>
            
            <p>You may enter up to ten authors here by clicking on "Add". Enter in format: Family Name, Given Name</p>
        
                <div id="author1" class="conf_form_author">
                    <label for="author1">Author</label>
                    <input name="author1" type="text" id="author1" size="40" />
                    <br />
                    <label for="organization1">Organisation</label>
                    <input type="text" name="organization1" id="organization1" size="40" />
                    <br />
                    <label id="author2add"><a onClick="add_author('author2');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div>   
                <div id="author2" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author2">Author</label>
                    <input name="author2" type="text" id="author2" size="40" />
                    <br />
                    <label for="organization2">Organisation</label>
                    <input type="text" name="organization2" id="organization2" size="40" />
                    <br />
                    <label id="author3add"><a onClick="add_author('author3');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div>  
                <div id="author3" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author3">Author</label>
                    <input name="author3" type="text" id="author3" size="40" />
                    <br />
                    <label for="organization3">Organisation</label>
                    <input type="text" name="organization3" id="organization3" size="40" />
                    <br />
                    <label id="author4add"><a onClick="add_author('author4');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div>  
                <div id="author4" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author4">Author</label>
                    <input name="author4" type="text" id="author4" size="40" />
                    <br />
                    <label for="organization4">Organisation</label>
                    <input type="text" name="organization4" id="organization4" size="40" />
                    <br />
                    <label id="author5add"><a onClick="add_author('author5');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div>  
                <div id="author5" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author5">Author</label>
                    <input name="author5" type="text" id="author5" size="40" />
                    <br />
                    <label for="organization5">Organisation</label>
                    <input type="text" name="organization5" id="organization5" size="40" />
                    <br />
                    <label id="author6add"><a onClick="add_author('author6');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div> 
                <div id="author6" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author6">Author</label>
                    <input name="author6" type="text" id="author6" size="40" />
                    <br />
                    <label for="organization6">Organisation</label>
                    <input type="text" name="organization6" id="organization6" size="40" />
                    <br />
                    <label id="author7add"><a onClick="add_author('author7');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div> 
                <div id="author7" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author7">Author</label>
                    <input name="author7" type="text" id="author7" size="40" />
                    <br />
                    <label for="organization7">Organisation</label>
                    <input type="text" name="organization7" id="organization7" size="40" />
                    <br />
                    <label id="author8add"><a onClick="add_author('author8');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div> 
                <div id="author8" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author8">Author</label>
                    <input name="author8" type="text" id="author8" size="40" />
                    <br />
                    <label for="organization8">Organisation</label>
                    <input type="text" name="organization8" id="organization8" size="40" />
                    <br />
                    <label id="author9add"><a onClick="add_author('author9');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div> 
                <div id="author9" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author9">Author</label>
                    <input name="author9" type="text" id="author9" size="40" />
                    <br />
                    <label for="organization9">Organisation</label>
                    <input type="text" name="organization9" id="organization9" size="40" />
                    <br />
                    <label id="author10add"><a onClick="add_author('author10');" 
                    style="text-decoration:underline;cursor:hand;cursor:pointer;">Add</a></label>
                </div> 
                <div id="author10" class="conf_form_author" style="display:none;visibility:hidden;">
                    <label for="author10">Author</label>
                    <input name="author10" type="text" id="author10" size="40" />
                    <br />
                    <label for="organization10">Organisation</label>
                    <input type="text" name="organization10" id="organization10" size="40" />
                </div> 
           
            <br />
            <br />
            
            <h3>Presentation</h3>
            
            <p>Enter information about your desired presentation at the conference.</p>
            
            <label for="format">Preferred Format</label>
                <select id="format" name="format">
		    <option value="Select">Select</option>
		    <option value="Oral">Oral</option>
                    <option value="Poster">Poster</option>
                    
                </select>
            <br /><br />
         
            <label for="presenter">Name of Presenting Author</label>
                <input type="text" name="presenter" id="presenter" size="40" />
            <br />
            
            
            
            <br />
            <br />
            <br />
            
            <h3>Abstract Content</h3>
            
            <p>Please select the main topic area of your abstract.</p>
            
            <label for="topic">Topic</label>
                <select id="topic" name="topic">
                    <?php
						$t = 1;
						while ($custom_topic[$t]) {
							echo "<option value='" . $custom_topic[$t] . "'";
								echo ">" . $custom_topic[$t] . "</option>";	
							$t = $t+1;
						}		
					?>	
                </select>
            <br /><br />

            

            
            <p>Please type in your abstract in this box:</p>
            
            <textarea name="background" wrap="hard" cols="80" rows="20" 
            onkeyup="check_length(this, <?php echo $background_words_limit; ?>);" 
            onkeydown="check_length(this, <?php echo $background_words_limit; ?>);" 
            onmouseout="check_length(this, <?php echo $background_words_limit; ?>);"></textarea>
            <br /><br />
             
             
            <label for="background">
                <span class="suggested_words">Suggested<br /><?php echo $background_words_limit; ?> words</span>
                <span id="background_your_words" class="your_words">
                    Your count<br /><span id="background_words">0</span> words
                </span>
            </label>
            <p>Note: the complete abstract should not exceed <?php echo $background_words_limit; ?> words</p>
            
            
            <span id="total_words_remaining" style="color:#009900;">
		Your Total: 
		<p>
		  <span id="words_remaining">0</span> words
                </p>
            </span>
	    
            
           
      
            
            <input type="hidden" id="word_count" name="word_count" value="0" />
            
            <br /><br />
            
            <h3>Contact Person</h3>
            
            <p>Enter contact details for corresponding author.</p>
            
                <label for="name">Name</label>
                    <input type="text" name="name" id="name" size="40" />
                <br />
                <label for="email">E-mail #1</label>
                    <input type="text" name="email1" id="email1" size="40" />
                <br />
                <label for="email">E-mail #2</label>
                    <input type="text" name="email2" id="email2" size="40" />
                <br />
                <label for="phone">Office Phone</label>
                    <input type="text" name="phone1" id="phone" size="40" />
                <br />
                <label for="phone">Cell Phone</label>
                    <input type="text" name="phone2" id="phone" size="40" />
                <br />
                <label for="fax">Fax</label>
                    <input type="text" name="fax" id="fax" size="40" />
                <br />
                <label for="address">Mailing Address</label>
                    <textarea name="address" id="address" wrap="hard" cols="40" rows="2" /></textarea>
                <br />
            
            <br /><br /><br />
            <p>Accepted abstracts will be compiled into the <em>Book of Abstracts and Conference Proceedings</em> 
            for wide distribution.  Abstracts that do not follow the above format may not be included. By submitting 
            an abstract, you authorize its inclusion in these publications with minor edits as needed.</p>

            <p>
            <input type="checkbox" name="agree" value="agree">
            I accept the terms and conditions for abstract submission.
            </p>
            
            <p>Please note that once you click on the button below, your abstract will be submitted and no further 
            changes can be made. We appreciate your interest in this conference.</p>
            
            
           
            
           <div class="captcha">
            <h3>Are you human?</h3>
            <p>
                Sorry to ask. Please type the text shown in the figures:
            </p>
       
          <?php
	  require_once('recaptchalib.php');
	  $publickey = "6LeMqvESAAAAADC4ny9xYR8aPnd8A4EUc5hEnmtx"; // you got this from the signup page
	  echo recaptcha_get_html($publickey);
	  ?>
	  
	  </div>

     <input id="submitform" name="submit" type="submit" value="Submit this Abstract" 
            style="width:250px;height:25px;color:black;" />
 </form>
       
        
    	<br /><br />
      </div>
    </div>
    
 
	
    
  </div>
  
  
 

	
    
        
</body>


</html>

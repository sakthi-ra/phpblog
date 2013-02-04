<?php /*
 * ###
 * PHR_PhpBlog
 * %%
 * Copyright (C) 1999 - 2012 Photon Infotech Inc.
 * %%
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ###
 */ ?>
<?php
/*$sql="SELECT * FROM blog_answer";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
print_r($row);*/

if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "Your email subject line";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    
    $email_message = "Form details below.\n\n";
     
  /*  function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }*/
     
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Comments: ".$comments."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
//mail($email_to, $email_subject, $email_message, $headers); 
$msg="Thank you for contacting us. We will be in touch with you very soon.";

}
?>
<style>
  body {
	background-image: none;
	width:100%

}
* { font-family: Verdana; }
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
.contact
{
	margin:0 auto;
	width:800px;
	padding:50px 0 0 0;
}
</style>

<script>
  $(document).ready(function(){
    $("#contactform").validate();
  });
  </script>
		<div class="banner_wrapper">
		  <div class="banner">
		  	<div id="inner_banner">
				<div class="ws_images"></div>
			</div>
			<div class="ws_shadow"></div>
	  	  </div>
          <div class="contact">
          	<h2>Contact</h2>
             <form name="contactform" method="post" action="#" id="contactform">
            <div style="height:30px; color:#FF0000"><?php if($msg!="") { echo $msg; }?></div>
             <div >
              <label for="first_name">First Name <em>*</em></label>
             </div>
             <div>
              <input  type="text" name="first_name" maxlength="50" size="30"  class="required">
             </div>
             <div >&nbsp;</div>
             <div>
              <label for="last_name">Last Name<em>*</em></label>
             </div>
             <div>
              <input  type="text" name="last_name" maxlength="50" size="30" class="required">
             </div>
             <div >&nbsp;</div>
            <div>
              <label for="email">Email Address <em>*</em></label>
            </div>
             <div>
              <input  type="text" name="email" maxlength="80" size="30" class="required email">
             </div>
              <div >&nbsp;</div>
            
             <div >
              <label for="telephone">Telephone Number &nbsp; &nbsp;</label>
             </div>
             <div>
              <input  type="text" name="telephone" maxlength="30" >
             </div>
              <div >&nbsp;</div>
            
             <div >
              <label for="comments">Comments <em>*</em></label>
             </div>
             
             <div valign="top">
              <textarea  name="comments" maxlength="1000" cols="25" rows="6" class="required"></textarea>
             </div>
              <div >&nbsp;</div>
            <div style="width:400px;">
              <div style="float:left; width:130px;">&nbsp;</div><div style="float:left; width:220px;"><input type="submit" value="Submit"></div>
            </div>
            </form>
           </div> 
          </div> 
         
      
     
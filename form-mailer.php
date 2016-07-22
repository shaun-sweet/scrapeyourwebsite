<?php
  
  //Email information
  $admin_email = "info@scrapeyour.website";
  $name = $_POST['name'];
  $email = $_POST['email'];
  // $message = $_REQUEST['message'];
  $message = $_POST['message'];
  
  //send email
  mail($admin_email, "Scrape Inquiry" , $message, "From: " . $name . "<" . $email . ">" );
  
  //Email response
  echo "Thank you for contacting us!  You'll hear back within 24 hours.  Make sure to check your spam folder.  You're going to be redirected to the home page now...";
  
  //if "email" variable is not filled out, display the form
  header( 'Location: http://www.scrapeyour.website' );
?>
<script>
  setTimeout(function() {
    window.location.replace("http://scrapeyour.website/");
  }, 5000)
</script>
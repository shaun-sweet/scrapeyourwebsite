<?php include('./header.php') ?>
<main>
  <?php

    //Email information
    $admin_email = "info@scrapeyour.website";

    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $message = $_POST['message'];
    $email_content = "
    Inquirer: {$name} \n
    Email: {$email} \n
    Message: {$message}
    ";
    
    //send email
    mail($admin_email, "Scrape Inquiry" , $email_content, "From: " . $name . "<" . $email . ">" );
    
    //Email response
    echo "Thank you for contacting us {$name}!  You'll hear back within 24 hours to your email address: {$email}.  Make sure to check your spam folder.  You're going to be redirected to the home page now...";
    
    //if "email" variable is not filled out, display the form
    header( 'Location: http://www.scrapeyour.website' );
  ?>
  <script>
    setTimeout(function() {
      window.location.replace("http://scrapeyour.website/");
    }, 10000)
  </script>
</main>
<?php include('./footer.php') ?>
<?php
 
if(isset($_POST['EMAIL'])) {
    
    $email_to = "emacdougall@kivuto.com";//"Windows10@kivuto.com,marketing@kivuto.com";
    $email_subject = "New submission from Office 365 ProPlus form";   
 
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }  
 
    // is the user a robot?
    if(!empty($_POST['b_56207817284eac40f14c245a7_45477bc4ed'])) {
        died('<ul><li>You did not pass our robot test.</li></ul>');       
    }  
 
    $first_name = $_POST['FNAME']; // required
    $last_name = $_POST['LNAME']; // required
    $email_from = $_POST['EMAIL']; // required
    $phone = $_POST['PHONE']; // not required
    $institution = $_POST['INST']; // required
    $agreement_number = $_POST['NUMBER']; // required
    $website = $_POST['WEBSITE']; // not required
    $country = $_POST['COUNTRY']; // required
    $language = $_POST['LANGUAGE']; // required
    $region = $_POST['REGION']; // required
    $contact_time = $_POST['PREFERTIME']; // required
    $program = $_POST['PROGRAM']; // default Windows 10 Education
	 $form_language = $_POST['FORMLANG']; // default
    /*if(isset($_POST['OPTIN']))
    {
        $opt_in = $_POST['OPTIN']; // not required
    }
    else
    {
        $opt_in = "No"; // not required
    }*/ 
 
    $email_message = "<html><body><h2>Submission details are below:</h2><br>";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
 
    }
    $email_message .= "<strong>Program: <span style='text-decoration:underline;'>".clean_string($program)."</span></strong><br><br>";
    $email_message .= "<strong><em>User Details:</em></strong><br>";
    $email_message .= "<strong>Name:</strong> ".clean_string($first_name)." ".clean_string($last_name)."<br>";
    $email_message .= "<strong>Email:</strong> ".clean_string($email_from)."<br>";
    $email_message .= "<strong>Telephone:</strong> ".clean_string($phone)."<br><br>";
    $email_message .= "<strong><em>Institution Details:</em></strong><br>";
    $email_message .= "<strong>Institution:</strong> ".clean_string($institution)."<br>";
    $email_message .= "<strong>Agreement Number:</strong> ".clean_string($agreement_number)."<br>";
    $email_message .= "<strong>Website:</strong> ".clean_string($website)."<br><br>";
    $email_message .= "<strong><em>Additional Information:</em></strong><br>";
    $email_message .= "<strong>Country:</strong> ".clean_string($country)."<br>";
    $email_message .= "<strong>Preferred Language:</strong> ".clean_string($language)."<br>";
    $email_message .= "<strong>Region of Operation:</strong> ".clean_string($region)."<br>";
    $email_message .= "<strong>Preferred Contact Time:</strong> ".clean_string($contact_time)."<br><br>";
	 $email_message .= "* form originally submitted in <span style='text-transform:capitalize;'>".clean_string($form_language)."</span>.<br>";
    /*$email_message .= "<strong>Opted In to Marketing: ".clean_string($opt_in)."</strong><br> */
    $email_message .= "</body></html>";
     
 
// create email headers
 
$headers = "From: KivutoRequest@kivuto.com\r\n"."Reply-To: ".$email_from."\r\n"."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n";
 
mail($email_to, $email_subject, $email_message, $headers);  

}

?> 

<head>
    <title>Thank you - Office 365 ProPlus</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/viewport.js"></script>      
    <script src="js/jquery.fancybox.pack.js"></script> 
    <script src="js/main.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.offcanvas.js"></script>
    <script>
      $(document).foundation();
    </script>
   <style>
      .subHeader { margin-top: 0 !important; }
   </style>
</head>
 
<body>
    <!-- Header-->
    <div class="off-canvas-wrap" id="thankyou">
        <div style="background-color: #F37022;">
             
            <?php include 'header-b.php'; ?> 
           
           <div style="min-height: 600px;display: table; margin: 0 auto">
            
            <div style="max-width:1000px; vertical-align:middle; display: table-cell; margin: 0 auto; text-align:center; padding: 80px 10px 50px 10px; color:white;">
                <h1 style="color:white;">Thank you</h1>
                <p style="font-size:22px;">Your information has been submitted.<br>Someone from Kivuto will be in contact with you shortly.</p>
                <p style="font-size:22px;">Thank you for your time.</p><br/>
                <a href="index.php"><div class="button" style="min-width:200px;"><span style="font-size:22px;">Go back</span></div></a>
                <a href="//kivuto.com"><div class="button" style="min-width:200px;"><span style="font-size:22px;">Visit Kivuto</span></div></a>
            </div>
            
            </div>
              
            <?php include 'footer/footer.php'; ?>

        </div>
    </div>
</body>
 
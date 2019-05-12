<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"       content="width=device-width, initial-scale=1">
  <meta name="keywords"       content="gluthea complex dr, gluta, glutathione, gluta supplement, gluta capsule, gluta injection, delayed release, grape seed extract, liver detoxification, Setria Glutathione, Sodium Ascorbate" />
  <meta name="description"    content="Gluthea Complex DR is a dietary supplement in capsule form. It provides nutritional support for detoxification and immune function, and supplies nutrients shown to be especially supportive for liver function and brain function.">
  <meta name="author"         content="Kervin Tan">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://glutheacomplexdr.com/">
  <meta property="og:title" content="Gluthea Complex DR">
  <meta property="og:description" content="Gluthea Complex DR is a dietary supplement in capsule form. It provides nutritional support for detoxification and immune function, and supplies nutrients shown to be especially supportive for liver function and brain function.">
  <meta property="og:image" content="http://glutheacomplexdr.com/img/gluthea-seo.jpg">

  <title>Gluthea Complex DR</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Poppins:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/gluthea.css" type="text/css">

  <link rel="shortcut icon" href="../img/gluthea-favicon.png" type="image/png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="page-top" class="thank-you">

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "biz@glutheacomplexdr.com";
    $email_subject = "Gluthea Website Inquiry";
 
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
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<header>
    <div class="container header-content">
      <div class="col-sm-6 header-content-inner wow fadeInUp">
        <img src="../img/gluthea-logo.png" class="logo">
        <h1>Thank you for contacting us!</h1>
        <p>We will be in touch with you very soon.</p>
        <a href="../index.html" class="page-scroll btn btn-primary">Back to Website</a>
      </div>
    </div>
  </header>

<div class="social-media">
  <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
  <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <p class="copyright">© 2019 Neotech Industries Int’l, Inc. All rights reserved. <span class="krvin">Designed & developed by <a href="http://krvin.com" target="_blank">KRVIN</a>.</p>
      </div>
    </div>
  </div>
</footer>


<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/jquery.fittext.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/gluthea.js"></script>
 
<?php
 
}
?>

</body>

</html>
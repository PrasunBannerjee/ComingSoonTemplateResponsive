<?php
  //$to = $_POST['to'] ;    
  $message = "Hi there, \n You have a new visitor on your Website.\n\r The person's name is: ".$_POST['name']."\r\n\r\nAnd the person's Email id is: ".$_POST['email'];
  $from = $_POST['email'];
  $headers =  "From: ".$_POST['email'];
  mail( "you@yourdomain.com", "Subject Line for the Email", $message, $headers);
  // mail( "another@yourdomain.com", "Carbon Copy: Subject Line", $message, $headers);
   
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="The awesome bootstrap powered responsive coming soon landing page with signup/subscribe to email facility for your website" />
<meta name="keywords" content="Twitter Bootstrap, Coming soon page, landing page, launching page, mobile friendly, themeforest, html5, subscribe to email" />
<meta name="rating" content="general" />
<meta name="robots" content="index,follow" />

    
 

   
    <link href="css/booting-soon.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'> <link rel="shortcut icon" href="favicon.ico">

    <title>Thank You - Booting Soon</title>

    
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">


   
    <link href="css/booting-soon.css" rel="stylesheet">

  </head>

  <body>

    <br><br><br><br>
    <div class="container">

      <div class="starter-template">
      <div id="logo"><center>      <img src="images/thank-you.png" class="img-responsive" alt="Thank you image"/></center></div>
<div id="material">        
        <h1>Your response has been recorded</h1>
        
<br>
<p class="lead">        Get me back to the <a href="index.html"> homepage</a></p></div>



      </div>

    </div><!-- /.container -->


    <!-- core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" > </script>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

 <script>
$(document).ready(function () {
$('#material').slideDown(1200);
 $('#logo').hide().delay(900).effect("bounce", { direction:'down', times: 5 }, 1000);
$('#material').show("highlight");
 
       });
</script>

   </body>
</html>

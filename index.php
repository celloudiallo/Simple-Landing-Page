<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GuinéeBoulots</title>
    <meta name="description" content="Littlespark Coming soon page">
    <meta name="author" content="littlespark VT">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/bootstrap.css" rel="stylesheet">
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/custom.css" rel="stylesheet">
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/m-buttons.css" rel="stylesheet">
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/m-forms.css" rel="stylesheet">
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/countdown.css" rel="stylesheet">
    <link href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/css/validationEngine.jquery.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/images/favicon.ico">
    <link rel="apple-touch-icon" href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/images/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/images/apple-touch-icon-114x114.png">

    <script src="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/js/jquery.js"></script>
    <script src="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/js/jquery.validationEngine.js" type="text/javascript"></script>
    <script type="text/javascript"> 
        $(document).ready(function() {
          // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
          $("#formID").validationEngine({
            success :  false,
            failure : function() {}
          })
          //$.validationEngine.buildPrompt("#date","This is an example","error")       // Exterior prompt build example
          //$.validationEngine.closePrompt(".date")                      // Exterior prompt close example
        });
    </script>
  </head>

  <body>

    <div class="container">
      <div class="row">

        <div class="span12">
          <h1 class="logo">GuinéeBoulots</h1>
        </div>

<!--         <div class="span12">
          <h2>Progress</h2>
          <div class="progress progress-striped active">
            <div class="bar" style="width: 65%;"></div>
          </div>
        </div> -->

        
      </div>
      <div class="row">
        <div class="span6">
          <h2 class="about">Bienvenue</h2>
          <p class="info">GuinéeBoulots est en reconstruction pour mieux vous servir. Nous serons bientôt de retour. Merci</p>
        </div>



        <div class="span6">
          <img src="http://test.guineeboulots.com/wp-content/uploads/2014/05/guineeboulots-logo-official.png">
          <div class="form">

   <div id="contact_form">
      <form id="formID" action="index.php" method="post">
        <p>
          <input type="text" name="email" id="email" class="validate[required,custom[email]] text-input input-text m-wrap m-ctrl" placeholder="Entrez votre email address" />
          <input type="submit" name="submit" id="submit" value="Envoyer" class="m-btn blue" />
        </p>
      </form>
      <div id="code">
        <?php
        if (isset($_POST['submit']) or isset($_POST['submit_x']))
    {       
          $to = "info@guineeboulots.com";
          $subject = "Information";
          $email_field = $_POST['email'];
          $body = "E-Mail\n$email_field";
           
          echo "Message Sent";
          mail($to, $subject, $body);
        
        } else { }
        ?>
      </div>
    </div>
    </div>
        </div>
      </div>

    <hr>
    <div class="row">
      <div class="span12">
          
          <h2 class="about">Temps jusqu'au lancement du site:</h2>
          <div id="counter">
            <!--counter is here -->
          </div>
          
        </div>
      </div>      
      <hr>

      <footer>
        <div class="row">
        <div class="span4">
          <p>&copy; <a href="http://www.guineeboulots.com">GuinéeBoulots</a> 2014</p>
        </div>
        </div>
      </footer>

    </div> <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  <script type="text/javascript" src="https://rawgit.com/celloudiallo/Simple-Landing-Page/master/js/jquery.countdown.js"></script>
    <script type="text/javascript">
<!--
// CHANGE THESE NUMBERS TO SPECIFY YOUR LAUNCH DATE
    $(function () {
      var liftoffTime = new Date(2014, 8 - 1, 12, 11, 00);
      $('#counter').countdown({until: liftoffTime, 
        layout: '{dn} {dl}, {hn} {hl}, {mnn} {ml}, {snn} {sl}'});
    });
-->
    </script>
  </body>

</html>

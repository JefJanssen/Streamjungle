<?php

  session_start();

  require_once 'helpers/security.php';

  $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
  $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];


 ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Stream Jungle - Contact</title>
  <link href="css/main.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

  <div class="nav navbar-inverse navbar-fixed-top">
  	<div class="container">

  		<a href="home.php" class="navbar-brand">STREAM JUNGLE.com</a>

  		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  		</button>

  		<div  class="collapse navbar-collapse navHeaderCollapse">
  			<ul class="nav navbar-nav navbar-right">
  				<li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
  				<li><a id="bygames" href="games.php">Streams by Games</a></li>
  				<li><a href="contactform.php">Contact</a></li>


  			</ul>
  		</div>
  	</div>
  </div>

<div class="container">

  <div class="contactus">
    <h1>Feedback</h1><p class="redalert">Please note that when the submission of your feedback failed, it will show an error. If it successfully sent it, you will be returned to our homepage, <strong>this is normal</strong>.</p><br>
    <?php if(!empty($errors)): ?>
    <div class="panel">
      <ul>
        <li><?php echo implode('</li><li>', $errors); ?></li>
      </ul>
    </div>
    <?php endif; ?>


    <form action="contact.php" method="post">

      <label class="conlabel">Why are you contacting us? *<br></label><br>
      <input type="radio" name="feedback" value="problem"> <span class="glyphicon glyphicon-exclamation-sign"></span> Problem<br>
      <input type="radio" name="feedback" value="idea"> <span class="glyphicon glyphicon-plus-sign"></span> Idea<br>
      <input type="radio" name="feedback" value="question"> <span class="glyphicon glyphicon-question-sign"></span> Question<br>
      <input type="radio" name="feedback" value="showlove"> <span class="glyphicon glyphicon-heart"></span> Show Love<br><br>



      <label class="conlabel">
        Your name *
        <input type="text" name="name" autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"' : '' ?>>
      </label><br>
      <label class="conlabel">
        Your email adress *
        <input type="email" name="email" autocomplete="off"<?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"' : '' ?>>
      </label><br>
      <label class="conlabel">
        Your message *
        <textarea name="message" rows="8"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
      </label><br>

      <input class="conlabel btn btn-danger" type="submit" value="Send!">

      <p class="muted">* means a required field</p>
    </form>
  </div>
</div>


  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h5>STREAM JUNGLE</h5>
          <p class="fade-gray">Streamjungle.com is a gaming related website, maintained by two developers, who watch streams a LOT and created this website for that reason, I guess.</p>
        </div>

        <div class="col-md-3">
          <h5>FUTURE | TO-DO LIST</h5>
          <p class="fade-gray">Adding categories to most streams is our number 1 goal at the moment! Adding other games is our next priority.</p>
        </div>

        <div class="col-md-3" id="otherlinks">
          <h5>LINKS</h5>
          <ul>
            <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
            <li><a href="tos.php" style="color: white; text-decoration: none;">Terms of Service</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid dark-style" id="footerfooter">
      <div style="text-align: center;" class="addthis_sharing_toolbox"></div>
      <div class="container fade-gray" style="text-align: center;">
        <p>We are an independent site, not affiliated or endorsed by any game or company.</p>
        <p>&copy; 2015 StreamJungle</p>
      </div>
    </div>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);

 ?>

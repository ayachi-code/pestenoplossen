<!DOCTYPE html>

<html>

<head>

<title>Contact</title>
<link rel="stylesheet" href="index.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">pestenoplossen</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/index.html">Home</a></li>
      <li class="active"><a href="/contact/index.php">contact</a></li>
      <li><a href="/tips/index.html">tips</a></li>
      <li><a href="/poster/index.html">poster</a></li>
    </ul>
  </div>
</nav>


<!-- Contact Forum -->
<center>
<?php
$action=$_REQUEST['action'];
if ($action=="")    
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    jouw naam:<br>
    <input name="name" type="text" value="" size="30"/><br>
    jouw email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    jouw bericht:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="verstuur email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "alle velden zijn verplicht, please vul het gewoon in dank u wel <a href=\"\">the form</a> opnieuw.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("stoppesten9@gmail.com", $subject, $message, $from);
		echo "Email is verstuurd,u krijgt binnenkort antwoord!";
	    }
    }  
?>
</center>
<!-- contact forum -->



</body>


</html>

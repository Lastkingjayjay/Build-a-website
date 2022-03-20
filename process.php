<?php


if(isset($_POST['submit'])) {

  echo "it worked";
  
  $to = "juniorjosephr@gmai.com";
  $subject = "My subject";
  $txt = "Hello world!";
  $headers = "From: webmaster@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";
  
  mail($to,$subject,$txt,$headers);





}

?>
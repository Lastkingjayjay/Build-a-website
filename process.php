<?php


if(isset($_POST['submit'])) {

  echo "it worked";
  
  $to ="Juniorjosephr@gmail.com";
  $email = $_POST ['email'] 
  $subject = $_POST['subject']
  $txt =$_POST['messages']
  $headers ="From:" .$email . "\r\n" .
  "CC: somebodyelse@example.com";


mail($to, $subject, $headers) ;

header("location: contact.html");


}

?>
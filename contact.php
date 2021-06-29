<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject= $_POST['subject'];
  $emailFrom= $_POST['email'];
  $message= $_POST['message'];

  $mailTo = "salvador.frazao.quintas@gmail.com";
  $headers = "From: " .$emailFrom;
  $txt ="You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo,$subject,$txt,$headers);
  header("Location:contact.php?mailsend");
}


?>
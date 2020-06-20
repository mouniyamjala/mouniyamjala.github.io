<?php
//variable setting
$name=$_REQUEST['name'];
$email=$_REQUEST['Email'];
$message=$_REQUEST['Message'];

//check input fields
if(empty($name)||empty(email)||empty(message))
{
  echo "Please fill the fields":
}
else
{
  mail("mouniyamjala95@gmail.com","MyProfile Message",$message,"From: $name <$email>");
  echo "<script type='text/javascript'>alert('Your message sent successfully');
  window.history.log(-1);
</script>";
}
?>
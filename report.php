<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <title>Aliens Abducted Me - Report an Abduction</title>
 
      <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="contents">
  
         <h1>Aliens Abducted Me - Report an Abduction</h1>



<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$location = $_POST['city'] . ', '.$_POST['state'];
  
$duration = $_POST['howlong'];

$time = $_POST['whenithappened'];
$amount = $_POST['howmany'];
$dog = $_POST['dogspotted'];
&other = $_POST['other'];
echo '<p>Thanks for submitting the form.</p>';
  
echo "<p>You were abducted in $location " ;
 
echo ' and were gone for ' . $duration . '</p>';
echo "<p>$firstname, $lasname, $email, $time
, $amount, $dog, $other"</p>;  
  


	if ($_POST['bald'] == 'checked')
  {
 
	 	  $alien_description = '<p>The aliens were bald</p>';
  }
  
	else
  {
  	
		$alien_description = '<p>The aliens were not bald</p>';
  }
 
      
  echo $alien_description;


	if ($_POST['blue'] == 'checked') {
		$alien_description = '<p>The aliens were blue.</p>; }
	else {
		$alien_description = '<p>The aliens were not blue.</p>;}
	echo $alien_description;
	if ($_POST['blackeye'] = 'checked') {
		$alien_description = '<p>The alien has black eyes.</p>;}
	else {
		$alien_description = '<p>The alien does not have black eyes.</p>';}
	echo $alien_description;
	if ($_POST['longfingers'] = 'checked') {
		$alien_description = '<p>The alien has long fingers.</p>;}
	else {
		$alien_description = '<p>The alien has short fingers.</p>';}
	echo $alien_description;

?>

</div>

</body>

</html>

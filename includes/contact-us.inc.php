<?php
  /*
  Filename: contact-us.inc.php
  Description: included file for the contact us form
  Author: Sajid Rahman & Loren Pfeiffer
  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width. initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Farmers Market Connect - Contact Us</title>

	<link rel="stylesheet" type="text/css" href="css/stylesHome.css">

	<!--<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">-->
	<!--<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
	<link href="https://fonts.googleapis.com/css2?family=Handlee&family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<form class="contactform">
  <div class="contact-us" id="contact-us">
    <div class="contactform-left">
      <input type="text" id="input-name" placeholder="Name">
      <input type="email" id="input-email" placeholder="Email address">
      <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="contactform-right">
      <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
  </div>
</form>


<style media="screen">
	form {
		 max-width: 800px;
		 text-align: center;
		 margin: 20px auto
	}

	form input, textarea {
			border: 0; outline:0;
			padding: 1em;
			border-radius:8px;
			display: block;
			width: 100%;
			margin-top: 1em;
			font-family: 'Quicksand', sans-serif;
			resize: none;
	}
</style>

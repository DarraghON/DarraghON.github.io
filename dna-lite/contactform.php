<?php

if (isset($_POST['submit'])) {
	$contact-name = $_POST ['contact-name'];
	$contact-email = $_POST ['contact-email'];
	$contact-interest = $_POST ['contact-interest'];
	$contact-message = $_POST ['contact-message'];

	$mailTo = "info@orbitracing.ie";
	$headers = "From: .$contact-email";
	$txt = "You have recieved an e-mail from ".$contact-name." .\n\n$contact-message";

	mail($mailTo, $contact-interest, $txt, $headers);
	header("Location: index.html?mailsend");
}
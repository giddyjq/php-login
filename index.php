<?php

// This needs to be on EVERY single webpage you wish to protect. It verifies whether "SESS_MEMBER_ID" is present or not (validating the login). 

	require_once('auth.php');

// Copy this code above the header on each page. Do NOT use on any of the login pages :)
?>

<p> if you can see this, it works! Add your content here. </p>

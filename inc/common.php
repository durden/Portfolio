<?php

function isEmail($email)
{

   // Create the syntactical validation regular expression
   $regexp = "^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$";

   // Presume that the email is invalid
   $valid = 0;

   // Validate the syntax
   if (eregi($regexp, $email))
   {
   		list($user,$domain) = split("@",$email);
		if(checkdnsrr($domain,"MX"))
			$valid = 1;	
   } 
   return $valid;
}

?>
<?php

// ------------------------
// MySQL Configuration :
// ------------------------

$db['host'] = "******";
$db['user'] = "******";
$db['pass'] = "******";
$db['name'] = "******";

// ------------------------
// Auth Configuration :
// ------------------------

$auth_conf['site_name'] = "Auth Test"; // Name of website to appear in emails
$auth_conf['email_from'] = "no-reply@auth.cuonic.tk"; // Email FROM address for Auth emails (Activation, password reset...)
$auth_conf['max_attempts'] = 5; // INT : Max number of attempts for login before user is locked out
$auth_conf['base_url'] = "http://auth.cuonic.tk/"; // URL to Getcours installation root WITH trailing slash

?>


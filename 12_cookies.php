<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Set a cookie
// The key of the thing you want to save (name), then the value to be saved (Brad), then how long you want the cookie to be saved (1 day)
// This cookie can be found in the chrome tools under application -> cookies
setcookie('name', 'Brad', time() + 86400);

// Check to see if a cookie is set with the key of name
// If it is, echo that out
// The $_COOKIE is a superglobal
if(isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
// Set the cookie and then pass in an empty value, then set it to a time in the past, which will then remove the cookie
setcookie('name', '', time() - 86400);
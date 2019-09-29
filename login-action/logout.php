<?php

// Note: The session_start() function must be the very first thing in your document. Before any HTML tags and any php code.
session_start();


// remove all session variables
session_unset(); 
// destroy the session 
session_destroy();


header("Location: ../index.php?msg=Successfull Logout");

?>
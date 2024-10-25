<?php
    // Define the name, value, and expiration time of the cookie
    $name = 'UserName'; // Name of the cookie
    $value = 100; // Value of the cookie, this can be any data type
    $expiration = time()+(60*60*24*30); // Cookie expiration set to 30 days from now

    // Set the cookie with the name, value, and expiration
    setcookie ($name, $value, $expiration);
    // The setcookie() function must be called before any HTML output
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<h1>Set Cookie</h1>
    
</body>
</html>
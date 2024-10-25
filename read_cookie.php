<?php
    // Check if the cookie 'UserName' is set
    if(isset($_COOKIE['UserName'])) {
        $value = $_COOKIE['UserName']; // Retrieve the cookie's value
        echo $value; // Display the cookie's value
    } else {
        $value = 0; // Default value if the cookie does not exist
        echo $value; // Display 0 if the cookie is not set
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   

    
</body>
</html>
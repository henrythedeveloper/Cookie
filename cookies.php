<?php
    $name = 'UserName';
    $value = 100;
    $expiration = time()+(60*60*24*30);
    setcookie ($name, $value, $expiration);
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
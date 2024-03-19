<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $excitedName =  "Tom";
    $excitedPassword = "123456";
    global $name;
    global $password;
    
    if(isset($_POST['name']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        }
        
        if($name == $excitedName && $password == $excitedPassword) {
            echo "Login succesfully!!!";
        }
        
        else {
            echo "Login rejected!!!";
        }
        
    ?>
    <br />
    <a href="index.php">Return Home page</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <?php 
          if(!isset($_COOKIE['last_visit'])) {
                    $name = "last_visit";
                    setcookie($name,Date("Y-M l  h:i:sa"));
                    echo "first time visiter";
          }else{
                    echo "last visted : ". $_COOKIE['last_visit'];
                    $name = "last_visit";
                    setcookie($name,Date("Y-M l  h:i:sa"));
          }
                 
          ?>
</body>
</html>
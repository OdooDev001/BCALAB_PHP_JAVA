<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form action="" method="get">
                    <input type="text" placeholder="username" name="username" /><br>
                    <input type="password" placeholder="password" name="password" /><br>
                    <input type="submit" value="login">
          </form>
          <?php
                    $host = "host = 127.0.0.1";
                    $port = "port = 5432";
                    $dbname = "dbname = bca_php";
                    $credentials = "user = postgres password = 123456";

                    $db = pg_connect("$host $port $dbname $credentials");

                    if (!$db){
                              echo "error in db";
                    }else {
                              echo "connected";
                    }
                    /*
                    $sql = <<<EOF
                    CREATE TABLE students(
                              username VARCHAR(30) PRIMARY KEY,
                              password  VARCHAR(16));
                              insert into students values('savad','1234567');
                    EOF;
                    $ret = pg_query($db,$sql)
                    */
                    if ($_GET){
                              $username = $_GET["username"];
                              $password = $_GET["password"];

                              $sql = <<<EOF
                                        SELECT * FROM students WHERE username = '$username';
                              EOF;
                              $rel = pg_query($db,$sql);
                              $row = pg_fetch_row($rel);
                              if ($row[1] == $password){
                                        echo "<br> login successfully";
                              }else{
                                        echo "<br> incurrect username or password";
                              }
                    }
          ?>
</body>
</html>
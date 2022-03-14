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
                    <input type="text" placeholder="Name" name="name"/>
                    <input type="text" placeholder="Username" name="user"/>
                    <br>
                    <input type="text" placeholder="Phone number" name="phone" />
                    <input type="password" placeholder="Password" name="pass" />
                    <br>
                    <input type="submit" value="login">
          </form>
          <?php
                    $host = "host = 127.0.0.1";
                    $port = "port = 5432";
                    $dbname = "dbname = bca_php";
                    $credentials ="user = postgres password = 123456";


                    $db = pg_connect("$host $port $dbname $credentials");

                    if(!$db){
                              echo "Error : Unable to open database\n";
                    } else {
                              echo "Opened database successfully\n";
                    }
                    if($_GET){
                              $name = $_GET['name'];
                              $username = $_GET['user'];
                              $phone = $_GET['phone'];
                              $pass = $_GET['pass'];
                              
                              $sql = <<<EFO
                                        insert into company values('$name','$username','$phone','$pass');
                              EFO;
                              $ret = pg_query($db,$sql);  
                              if(!$ret){
                                        echo pg_last_error($db);
                              }else{
                                        echo "Login successfully\n";
                              }
                    }
                    /*
                    $sql = <<<EOF
                              CREATE TABLE company(
                                        NAME VARCHAR(30) NOT NULL,
                                        USERNAME VARCHAR(30) PRIMARY KEY NOT NULL UNIQUE,
                                        PHONE VARCHAR(10) NOT NULL UNIQUE,
                                        PASSWORD VARCHAR(20) NOT NULL);
                              EOF;
                   

                    

                    $ret = pg_query($db,$sql);
                    if(!$ret) {
                              echo pg_last_error($db);
                           } else {
                              echo "Table created successfully\n";
                           } */

          ?>
</body>
</html>
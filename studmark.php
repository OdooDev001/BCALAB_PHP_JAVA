<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h3>Sudent mark upload form</h3>
          <form action="" method="post">
                    <input type="number" name="rolno" placeholder="Enter student's Roll number" /><br>
                    <input type="text" name="name" placeholder="Student name" /><br>
                    <input type="text" name="mark" placeholder="totle mark" /><br>
                    <input type="text" name="grade" placeholder="Grade"><br>
                    <input type="submit" value="submit" id="">
          </form>
          <h3>Student Result Form</h3>
          <form action="" method="get">
                    <input type="number" name="rolno" placeholder="enter roll number"><br>
                    <input type="submit" value="get result" id="">
          </form>
          <?php
                    $host = "host = 127.0.0.1";
                    $port = "port = 5432";
                    $dbname = "dbname = bca_php";
                    $credentials = "user = postgres password = 123456";
                    $db = pg_connect("$host $port $dbname $credentials");
                    if (!$db){
                              echo "error in database";
                    }else{
                              echo "connected";
                    }
                    if ($_POST){

                              $rollno = $_POST["rolno"];
                              $name = $_POST["name"];
                              $mark = $_POST['mark'];
                              $grade = $_POST['grade'];
                              
                              // table creation query
                              /*$sql = <<<EFO
                                        CREATE TABLE student(
                                                  rollno INT PRIMARY KEY NOT NULL,
                                                  name VARCHAR(30) NOT NULL,
                                                  mark INT,
                                                  grade VARCHAR(1));
                              EFO;
                              $rel = pg_query($db, $sql);
                              if(!$rel){
                                        echo pg_last_error();
                              }else{
                                        echo "table created ";
                              }
                              */
                              $sql = <<<EOF
                              INSERT INTO student VALUES($rollno,'$name',$mark,'$grade')
                              EOF;
                              $rel = pg_query($db, $sql);
                              if(!$rel){
                                        echo pg_last_error();
                              }else{
                                        echo "\nmark added successfully";
                              }
                    }elseif($_GET){
                              $rollno = $_GET['rolno'];
                             $sql = <<<EOF
                             SELECT * FROM student WHERE rollno = '$rollno';
                             EOF;

                             $rel = pg_query($db, $sql);
                             $row = pg_fetch_row($rel);
                             echo "<pre> 
                                        ID    : $row[0] 
                                        NAME  : $row[1]
                                        MARK  : $row[2]
                                        GRADE : $row[3]  
                              </pre>";

                    }
          ?>
</body>
</html>
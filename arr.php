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
                    $students = array("savad","mishal","harshad","basith","javid","mishal","shifana","mufeda","anas","najiya");
                    echo "<h4>items in array </h4>";
                    foreach ($students as $student){
                              echo $student."<br>";
                    }
                    sort($students);
                    echo "<h4> sorted array </h4>";
                    foreach ($students as $student){
                              echo $student."<br>";
                    }

                    $unique_array = array_unique($students);
                    echo "<h4>array without duplicates </h4>";
                    foreach ($unique_array as $student){
                              echo $student."<br>";
                    }

                    array_pop($unique_array);
                    echo "<h4> array  after poping </h4>";
                    foreach ($unique_array as $student){
                              echo "<br>".$student;
                    }

                    $reversed_array = array_reverse($unique_array);
                    echo "<h4>revesed array </h4>";
                    foreach ($reversed_array as $student){
                              echo "<br>".$student;
                    }

          ?>
          <form action="" method="get">
                    <input type="text" name="student" placeholder="Enter student name" /><br>
                    <input type="submit" value="check" id="">
          </form>
          <?php
                    if($_GET){
                              $flag = 0;
                              $count =0;
                              $name = $_GET["student"];
                              foreach($unique_array as $student){
                                        if ($student == $name){
                                                  $flag = 1;
                                                  break;
                                        }$count = $count+1;
                              }
                              if($flag == 1){
                                        echo "Element exist in".$count."th location";
                              }
                    }
          ?>
</body>
</html>
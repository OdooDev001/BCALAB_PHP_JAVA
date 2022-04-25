<html>
<body>
          <form action="fibnaci.php" method="get">
          <input type="text" name="input" placeholder="enter number">

          <input type="submit" value="submit">
</form>
<?php
          if($_GET){
                    $limit=$_GET["input"];
                    if ($limit!=""){
                              
                              $count=0;
                              $a=0;
                              $b=1;
                              $s=0;
                              echo "the fibonacci sequnce..\n";
                              while ($count <=(int)$limit){
                                        echo $n," ";
                                        $s=$a+$b;
                                        $a=$b;
                                        $b=$s;
                                        $count=$count+1;
                              }
                    }
          }
?>
</body>
</html>

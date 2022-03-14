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
                              $n=0;
                              $n1=1;
                              $next=0;
                              echo "the fibonacci sequnce..\n";
                              while ($count <=(int)$limit){
                                        echo $n," ";
                                        $next=$n+$n1;
                                        $n=$n1;
                                        $n1=$next;
                                        $count=$count+1;
                              }
                    }
          }
?>
</body>
</html>
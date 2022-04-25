<html>
<body>
          <form action="fibnaci.php" method="get">
          <input type="text" name="input" placeholder="enter number">

          <input type="submit" value="submit">
</form>
<?php
          if($_GET){
                    $l=$_GET["input"];
                    if ($l!=""){
                              
                              $c=0;
                              $a=0;
                              $b=1;
                              $s=0;
                              echo "the fibonacci sequnce..\n";
                              while ($c <=(int)$l){
                                        echo $a," ";
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

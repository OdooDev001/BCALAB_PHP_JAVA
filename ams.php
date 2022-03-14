<html>
<head>

          <title>Document</title>
</head>
<body>
          <form action="ams.php" method="get">
                    <input type="number" name="input" placeholder="enter a number"/>
                    <input type="submit" value="submit">
          </form>
          <br>
          <?php
                    function amstrong($number){
                              
                              $sum=0;
                              $x=(int)$number;
                              while($x!=0){
                                        $re=$x%10;
                                        $sum=$sum+$re*$re*$re;
                                        $x=$x/10;
                              }
                              if($number == $sum){
                                        return 1;
                              }else{
                                        return 0;
                              }
                    }
                    if ($_GET){
                              $num =$_GET["input"];
                              if ($num != ""){
                                        $flag = amstrong($num);
                                        if($flag ==1){
                                                  echo "This is an amstrong number";
                                        }else{
                                                  echo "This is not a amstrong number";
                              }
                              }
                    }

          ?>
</body>
</html>
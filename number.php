<html>
<body>
          <form action="number.php" method="get">
                    <input type="number" name="input" placeholder="enter a number"><br>
                    <input type="submit" value="checks">
          </form>                   
          <?php 
          if($_GET){
                    $number=$_GET["input"];
                    if ($number !=""){
                              $number=(int)$number;
                              $sum=0;
                              for($i=1;$i<sqrt($number);$i++){
                                        if($number%$i==0){
                                                  
                                                  if($number/$i==$i){
                                                            
                                                            $sum=$sum+$i;
                                                  }else{
                                                  $sum = $sum+$i;
                                                  $sum = $sum+($number/$i);
                                                  }
                                        }

                              }$sum = $sum-$number;
                              if ($sum > $number){
                              echo "this in an abundant number";
                              }
                              else if($sum < $number){
                              echo "this is a deficien number";
                              }
                              else{
                              echo "this is a perfect number";
                              }
                    }
          }
                

          ?>
</body>
</html>
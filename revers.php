<html><body>
          

<form action="revers.php">
          <input type="text" name="string" placeholder="enter a string to revers "><br>
          <input type="submit">
</form>
          <?php 
                    function string_revers($str){
                              $length = strlen($str);
                              $new_string = "";
                              for ($i=($length-1);$i>=0;--$i){
                                        $new_string = $new_string.$str[$i];
                              }
                              return $new_string;
                    }
                    if($_GET){
                              $value=$_GET["string"];
                              $reversed_string = string_revers($value);
                              echo $reversed_string;
                    }
                    
                    
          ?>
</body></html>
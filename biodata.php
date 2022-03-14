<html>
<body>
          <form action="biodata.php" method="get">
                    <input type="text" name="name" id="" placeholder="eneter name"><br>
                    <input type="number" name="age" id="" placeholder="enter age"><br>
                    <textarea name="address" id="" cols="30" rows="10" placeholder="current Address"></textarea><br>
                    <input type="tel" name="phone" id="" placeholder="enter your phone number"><br>
                    <input type="email" name="email" id="" placeholder="Enetr email ID"><br>
                    <input type="submit" value="Upload">

          </form>
          
          <?php 
          if($_GET){
                    $name=$_GET["name"];
                    $age=$_GET["age"];
                    $address=$_GET["address"];
                    $phone=$_GET["phone"];
                    $email=$_GET["email"];
         
                    echo "<ul>
                            <li>Name : $name </li>  
                            <li>Adress : $address </li> 
                            <li>Age : $age </li>  
                            <li>Phone : $phone </li>
                            <li>Email : $email </li>    
                    </ul>" ;
                }
          ?>
</body>
</html>
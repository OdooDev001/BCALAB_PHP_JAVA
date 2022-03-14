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
                    <select name="fruits">
                              <option value="1">Apple</option>
                              <option value="2">Orenge</option>
                              <option value="3">Mango</option>
                              <option value="4">Banana</option>
                              <option value="5">Kiwi</option>
                              <option value="6">Pineapple</option>
                    </select>
                    <input type="submit" value="view image" id="">
          </form>
          <?php
                    if ($_GET){
                              $fruit = $_GET["fruits"];
                              echo "<img src='$fruit.png'>";
                    }
          ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan3</title>
  </head>
  <body>
    <?php
    echo "Bilangan Prima dari 1-50:<br>";
    for ($i=1;$i<=50;$i++){
      $bil=0;
      for ($j=1;$j<=$i;$j++){
        if($i%$j==0){
          $bil++;
        }
      }
      if($bil==2){
        echo $i.", ";
      }
    }
     ?>
  </body>
</html>

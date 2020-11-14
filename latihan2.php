<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan2</title>
  </head>
  <body>
    <?php
    $arr = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid" , "kifuat" , "lorem" , "ipsum" , "dolor");
    $i = 0;
    foreach ($arr as $value) {
    echo "$value, ";
    $i++;
    }
    echo"<br>";
    echo"<br>";
    echo "Ascending: <br>";
    sort($arr);
    $i = 0;
    foreach ($arr as $value) {
    echo "$value, ";
    $i++;
    }
    echo "<br>";
    echo "<br>";
    echo "Descending: <br>";
    rsort($arr);
    $j = 0;
    foreach ($arr as $value) {
    echo "$value, ";
    $j++;}
    ?>
  </body>
</html>

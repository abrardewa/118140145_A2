<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faktorial</title>
  </head>
  <body>
    <?php
    function faktorial($basis) {
        // for ($i = $base; $i >= 0; $i--) {

        // }
        if($basis == 0 || $basis == 1) {
            return 1;
        } else {
            return $basis * faktorial($basis-1);
        }
    }

    echo "5! = " . faktorial(5);
     ?>
  </body>
</html>

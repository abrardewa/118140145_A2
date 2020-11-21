<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tugas NameTag</title>
  </head>
  <body>
    <?php

    function nametag($nama) {
        $nama_length = strlen($nama);
        $harga;
        echo "<p style='color:red'> " . ucwords($nama) . "</p>";
        echo "Harga nametag: ";
        if($nama_length <= 10){
           $harga = $nama_length * 300;
        }
        elseif($nama_length <= 20){
          $harga = $nama_length * 500;
        }
        else {
          $harga = $nama_length * 700;
        }                  
        echo $harga;
    }

    nametag('abrar dewa pratama barus');
     ?>
  </body>
</html>

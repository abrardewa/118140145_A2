<?php 
    $nrp = $_GET['nrp'];
    $conn = mysqli_connect("localhost", "root", "", "mhs");
    $query = mysqli_query($conn, "delete from mhs where nrp='$nrp'");
    $result = mysqli_affected_rows($conn);
    if($result) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.replace('index.php');
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location.replace('index.php');
              </script>";
    }
?>


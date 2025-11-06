<?php
$batas = time() + 5;
setcookie("user", "admin", $batas);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Cookies</title>
</head>
<body>
  <?php
  if (isset($_COOKIE["user"])) {
      echo "Selamat Datang, " . $_COOKIE["user"] . ". Cookie telah dibuat dan akan berakhir setelah 5 detik.";
  } else {
      echo "Cookie telah berakhir.";
  }
  ?>
</body>
</html>

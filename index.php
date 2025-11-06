<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>Dashboard</header>
  <div class="container">
    <aside>
      <ul class="menu">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="logout.php">Keluar</a></li>
      </ul>
    </aside>
    <section class="main">
      <?php
      echo "<h3>Selamat Datang</h3>";
      echo "<p>Anda login sebagai <b>" . $_SESSION['username'] . "</b></p>";
      ?>
    </section>
  </div>
  <footer>&copy; 2025</footer>
</body>
</html>

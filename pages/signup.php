<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/centered-main.css">
  <title>Daftar | E-Learning</title>
</head>
<body>
  <nav>
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <a href="login.php" class="btn nav-btn">Log In</a>
      <a href="signup.php" class="btn nav-btn active">Sign Up</a>
    </div>
  </nav>
  <main>
    <form method="post" action="/backend_daftar_user.php">
      <h1 class="form-title">Daftar</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">Nama</p>
          <input type="text" class="input-form" placeholder="Masukkan Nama" name="nama">
        </div>

        <div class="input">
          <p class="input-label">Email</p>
          <input type="text" class="input-form" placeholder="Masukkan Email" name="email">
        </div>

        <div class="input">
          <p class="input-label">Nomor Telepon</p>
          <input type="text" class="input-form" placeholder="Masukkan Nomor Telepon" name="no_telp">
        </div>

        <div class="input">
          <p class="input-label">Password</p>
          <input type="password" class="input-form" placeholder="Masukkan Kata Sandi" name="password">
        </div>

        <input type="submit" class="btn submit-btn" value="Daftar" name="daftar_user" />
      </div>
    </form>
  </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/centered-main.css">
  <title>Masuk | E-Learning</title>
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
      <a href="signup.php" class="btn nav-btn">Sign Up</a>
    </div>
  </nav>
  <main>
    <form method="post" action="/backend_masuk_user.php">
      <h1 class="form-title">Masuk</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">Email</p>
          <input type="text" class="input-form" placeholder="Masukkan Email" name="email">
        </div>

        <div class="input">
          <p class="input-label">Password</p>
          <input type="password" class="input-form" placeholder="Masukkan Kata Sandi" name="password">
        </div>

        <input type="submit" class="btn submit-btn" value="Masuk" name="masuk_user" />
      </div>
    </form>
  </main>
</body>
</html>
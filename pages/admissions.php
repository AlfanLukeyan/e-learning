<?php
  include("../config.php");
  if (!isset($_GET['course_id'])) {
    header("Location: /pages/courses.php");
  }
?>

<?php if (isset($_GET['course_id'])): ?>
<?php
  $sql = "SELECT c.id, c.nama, c.deskripsi, c.harga, c.durasi, t.nama as tutor, p.nama as 'partner' FROM course c JOIN (SELECT id, nama FROM tutor) t ON c.tutor_id=t.id JOIN (SELECT id, nama FROM partner) p ON c.partner_id=p.id WHERE c.id=:id";
  $query = $db->prepare($sql);
  $query->execute(['id' => $_GET['course_id']]);

  if (!$query) {
    header('Location: /pages/courses.php?status=not_found');
  }

  $course = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admissions.css">
  <title>Pendaftaran | E-Learning</title>
</head>
<body>
  <nav> 
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item active">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <?php if (!isset($_GET['user_id'])): ?>
        <a href="login.php" class="btn nav-btn">Log In</a>
        <a href="signup.php" class="btn nav-btn">Sign Up</a>
      <?php else: ?>
        <?php
    $sql = "SELECT nama FROM `user` WHERE id=:id";
    $query = $db->prepare($sql);
    $query->execute(['id' => $_GET['user_id']]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
        ?>
        <button class="btn nav-btn" onclick="logout()">Log Out <?php echo $user['nama'] ?></button>
      <?php endif; ?>
    </div>
  </nav>
  <main>
    <form method="post" action="/backend_admission.php">
      <h1 class="form-title">Pendaftaran</h1>

      <div class="form-list">
        <div class="input">
          <p class="input-label">
            <span><?php echo $course['nama'] ?></span>
            <span>•</span>
            <span><?php echo $course['tutor'] ?></span>
            <span>•</span>
            <span><?php echo $course['partner'] ?></span>
          </p>
          <textarea type="text" class="input-form" readonly rows="5"><?php echo $course['deskripsi'] ?></textarea>
        </div>

        <div class="form-grid-2">
          <div class="input">
            <p class="input-label">Durasi Kursus</p>
            <input type="text" class="input-form" readonly value="<?php echo $course['durasi'] ?> Bulan" />
          </div>
          
          <div class="input">
            <p class="input-label">Harga Kursus</p>
            <input type="text" class="input-form" readonly value="Rp <?php echo $course['harga'] ?>" />
          </div>
        </div>

        <input type="hidden" name="user_id" value="<?php if (isset($_GET['user_id'])) echo $_GET['user_id'] ?>">
        <input type="hidden" name="course_id" value="<?php echo $_GET['course_id'] ?>">
        <input type="submit" class="btn submit-btn" value="Daftar Kursus" name="admission" />
      </div>
    </form>
  </main>

  <script src="../scripts/main.js"></script>
</body>
</html>
<?php endif; ?>
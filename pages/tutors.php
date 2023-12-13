<?php
include("../config.php");
$sql = "SELECT nama, email FROM tutor";
$query = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/tutor.css">
  <title>Daftar Tutor | E-Learning</title>
</head>

<body>
  <nav>
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="courses.php" class="nav-item">courses</a>
      <a href="tutors.php" class="nav-item active">tutors</a>
      <a href="partners.php" class="nav-item">partners</a>
      <a href="admissions.php" class="nav-item">admissions</a>
      <a href="contact.php" class="nav-item">contact</a>
      <?php if (!isset($_GET['user_id'])) : ?>
        <a href="login.php" class="btn nav-btn">Log In</a>
        <a href="signup.php" class="btn nav-btn">Sign Up</a>
      <?php else : ?>
        <?php
        $sql_nav = "SELECT nama FROM `user` WHERE id=" . $_GET['user_id'];
        $query_nav = $db->query($sql_nav);
        $user = $query_nav->fetch(PDO::FETCH_ASSOC);
        ?>
        <button class="btn nav-btn" onclick="logout()">Log Out <?php echo $user['nama'] ?></button>
      <?php endif; ?>
    </div>
  </nav>
  <main>
    <h1 class="form-title">Daftar Tutor</h1>
    <section class="catalog">
      <?php while ($tutor = $query->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="card">
          <div class="card-header">
            <img src="../images/course-card.png" alt="tutor card">
            <div class="card-caption">
              <h2 class="card-caption-title"><?php echo $tutor['nama'] ?></h2>
              <p class="card-caption-subtitle">
                <span><?php echo $tutor['email'] ?></span>
              </p>
            </div>
          </div>
        </div>
        </div>
      <?php endwhile; ?>
    </section>
  </main>

  <script src="../scripts/main.js"></script>
</body>

</html>
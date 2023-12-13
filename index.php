<?php
  include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | E-Learning</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <nav>
    <a href="/index.php" class="logo">E-Learning</a>
    <div class="nav-list">
      <a href="pages/courses.php" class="nav-item">courses</a>
      <a href="pages/tutors.php" class="nav-item">tutors</a>
      <a href="pages/partners.php" class="nav-item">partners</a>
      <a href="pages/admissions.php" class="nav-item">admissions</a>
      <a href="pages/contact.php" class="nav-item">contact</a>
      <?php if (!isset($_GET['user_id'])): ?>
        <a href="pages/login.php" class="btn nav-btn">Log In</a>
        <a href="pages/signup.php" class="btn nav-btn">Sign Up</a>
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
    <div class="main-div">
      <h1>Learn without limits</h1>
      <p>Start, switch, or advance your career with more than 5,800 courses, Professional Certificates, and degrees from world-class universities and companies.</p>
      <div class="main-div-button">
        <?php if (!isset($_GET['user_id'])): ?>
          <a class="main-div-join-now btn" href="/pages/login.php">Join Now</a>
        <?php endif; ?>
        <a class="main-div-browse-course btn" href="/pages/courses.php">Browse Course</a>
      </div>
    </div>
    <img src="images/home.avif" class="main-image">
  </main>

  <script src="scripts/main.js"></script>
</body>
</html>
<?php
require "db.php";
$departments = $pdo->query("SELECT id, department_name, description FROM departments ORDER BY id")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pondicherry University | Home</title><link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
  <div class="brand"><div class="logo">PU</div><div><strong>PONDICHERRY UNIVERSITY</strong><span>School of Engineering and Technology</span></div></div>
  <nav><a class="active" href="index.php">Home</a><a href="about.php">About Us</a><a href="register.php">Register</a><a href="login.php">Login</a></nav>
</header>
<section class="hero">
  <p class="eyebrow">WELCOME TO</p>
  <h1>PONDICHERRY UNIVERSITY</h1>
  <h2>School of Engineering and Technology</h2>
  <p>Department of Computer Science</p>
  <div class="hero-actions"><a class="btn" href="register.php">Student Registration</a><a class="btn btn-outline" href="about.php">Explore Departments</a></div>
</section>
<main class="container">
  <div class="section-heading"><p class="eyebrow">ACADEMIC PROGRAMMES</p><h2>Our Departments</h2><p>Explore the departments listed in our database.</p></div>
  <div class="cards">
  <?php foreach ($departments as $department): ?>
    <article class="card"><div class="card-icon">✦</div><h3><?= htmlspecialchars($department["department_name"]) ?></h3><p><?= htmlspecialchars($department["description"]) ?></p></article>
  <?php endforeach; ?>
  </div>
</main>
<footer>© <?= date("Y") ?> Pondicherry University – Lab Exercise 6</footer>
</body></html>
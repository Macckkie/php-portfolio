<?php
$title = "Начало";
require __DIR__ . "/partials/header.php";
?>

<section class="hero">
  <h2>Здравей! Аз съм <span class="accent">Михаил Пеев</span></h2>
  <p>
    Правя уеб сайтове и малки уеб приложения. Това портфолио е направено с
    <strong>чист PHP</strong> (includes, масиви, loops, форми).
  </p>
  <div class="hero-actions">
    <a class="btn" href="projects.php">Виж проектите</a>
    <a class="btn btn-ghost" href="contact.php">Свържи се с мен</a>
  </div>
</section>

<section class="card">
  <h3>Умения</h3>
  <div class="tags">
    <span class="tag">PHP (основи)</span>
    <span class="tag">HTML</span>
    <span class="tag">CSS</span>
    <span class="tag">JavaScript (основи)</span>
  </div>
  
</section>

<?php require __DIR__ . "/partials/footer.php"; ?>

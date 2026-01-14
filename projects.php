<?php
$title = "Проекти";
$projects = require __DIR__ . "/data/projects.php";
require __DIR__ . "/partials/header.php";
?>

<h2>Проекти</h2>

<div class="grid">
  <?php foreach ($projects as $p): ?>
    <article class="card">
      <h3><?= htmlspecialchars($p["title"] ?? "") ?></h3>
      <p><?= htmlspecialchars($p["desc"] ?? "") ?></p>

      <div class="tags">
        <?php foreach (($p["tech"] ?? []) as $t): ?>
          <span class="tag"><?= htmlspecialchars($t) ?></span>
        <?php endforeach; ?>
      </div>

      <?php if (!empty($p["link"])): ?>
        <p style="margin-top: 12px;">
          <a class="link" href="<?= htmlspecialchars($p["link"]) ?>" target="_blank" rel="noreferrer">
            Отвори проекта →
          </a>
        </p>
      <?php endif; ?>
    </article>
  <?php endforeach; ?>
</div>

<?php require __DIR__ . "/partials/footer.php"; ?>

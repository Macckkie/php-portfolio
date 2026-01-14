<?php
$title = "Контакт";
$success = "";
$errors = [];


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $message = trim($_POST["message"] ?? "");

  if ($name === "") $errors[] = "Моля, въведи име.";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Невалиден имейл.";
  if (strlen($message) < 10) $errors[] = "Съобщението трябва да е поне 10 символа.";

  if (!$errors) {
    $safeMessage = str_replace(["\n","\r"], " ", $message);
    $line = date("Y-m-d H:i") . " | $name | $email | $safeMessage" . PHP_EOL;

    $storageDir = __DIR__ . "/storage";
    if (!is_dir($storageDir)) {
      mkdir($storageDir, 0777, true);
    }

    file_put_contents($storageDir . "/messages.txt", $line, FILE_APPEND);
    $success = "Успешно изпратено! ✅";
  }
}

require __DIR__ . "/partials/header.php";
?>

<h2>Контакт</h2>
<p class="muted">Попълни формата. Съобщенията се записват в <code>storage/messages.txt</code>.</p>

<?php if ($success): ?>
  <p class="alert success"><?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<?php if ($errors): ?>
  <ul class="alert error">
    <?php foreach ($errors as $e): ?>
      <li><?= htmlspecialchars($e) ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<form class="form" method="post" novalidate>
  <label>Име</label>
  <input type="text" name="name" value="<?= htmlspecialchars($_POST["name"] ?? "") ?>" placeholder="Иван Иванов">

  <label>Имейл</label>
  <input type="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="name@example.com">

  <label>Съобщение</label>
  <textarea name="message" rows="6" placeholder="Напиши съобщение..."><?= htmlspecialchars($_POST["message"] ?? "") ?></textarea>

  <button class="btn" type="submit">Изпрати</button>
</form>

<?php require __DIR__ . "/partials/footer.php"; ?>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>不安ブログ</title>
</head>

<body>

<?php include __DIR__ . '/../views/header.php'; ?>

<main>
  <h2>トップページ</h2>
<?php require_once __DIR__ . "/functions.php";
$blogs = getBlogs();
var_dump($blogs);
foreach($blogs as $blog): ?>

    <article>
      <h3>
        <a href="/single.php?id=<?= $blog['id'] ?>">
          <?= $blog['title'] ?>
        </a>
      </h3>

      <p><?= $blog["body"] ?></p>

    </article>

  <?php endforeach; ?>

</main>

<?php include __DIR__ . '/../views/footer.php'; ?>

</body>
</html>



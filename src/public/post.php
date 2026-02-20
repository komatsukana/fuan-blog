<?php
require_once "functions.php";

$blogs = getBlogs();
?>

<h2>記事一覧</h2>

<?php foreach ($blogs as $blog): ?>

  <article>

    <h3>
      <a href="/single.php?id=<?= $blog['id'] ?>">
        <?= $blog["title"] ?>
      </a>
    </h3>

    <p><?= $blog["body"] ?></p>
    <p>❤️ <?= $blog["likes"] ?> ｜ 👀 <?= $blog["views"] ?></p>

  </article>

<?php endforeach; ?>
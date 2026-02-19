<?php
$files = glob(__DIR__ . '/../data/blogs/*.json');
$blogs = [];

foreach ($files as $file) {
    $json = file_get_contents($file);
    $blogs[] = json_decode($json, true);
}
?>

<h2>記事一覧</h2>

<?php foreach ($blogs as $blog): ?>

  <article>
    <h3><?= $blog["title"] ?></h3>
    <p><?= $blog["date"] ?></p>
    <p>❤️ <?= $blog["likes"] ?> ｜ 👀 <?= $blog["views"] ?></p>
  </article>

<?php endforeach; ?>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include __DIR__ . '/../views/header.php';

/* idを受け取る */
$id = $_GET['id'] ?? null;

if (!$id) {
    echo "記事が見つかりません";
    exit;
}

/* JSON読む */
$file = __DIR__ . '/../data/blogs/' . $id . '.json';

if (!file_exists($file)) {
    echo "記事が存在しません";
    exit;
}

$json = file_get_contents($file);
$blog = json_decode($json, true);
?>

<main>

  <h2><?= $blog["title"] ?></h2>
  <p><?= $blog["date"] ?></p>

  <div class="blog-body">
    <?= nl2br($blog["body"]) ?>
  </div>

  <p>❤️ <?= $blog["likes"] ?> ｜ 👀 <?= $blog["views"] ?></p>

  <p><a href="/post.php">
← 記事一覧に戻る</a></p>

</main>

<?php include __DIR__ . '/../views/footer.php'; ?>

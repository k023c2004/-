<?php
include('db.php');

$restaurant_id = $_GET['id'];

// レストラン詳細を取得
$stmt = $conn->prepare("SELECT * FROM restaurants WHERE id = :id");
$stmt->bindParam(':id', $restaurant_id, PDO::PARAM_INT);
$stmt->execute();
$restaurant = $stmt->fetch();

// レストランのレビューを取得
$stmt_reviews = $conn->prepare("SELECT * FROM reviews WHERE restaurant_id = :id");
$stmt_reviews->bindParam(':id', $restaurant_id, PDO::PARAM_INT);
$stmt_reviews->execute();
$reviews = $stmt_reviews->fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($restaurant['name']); ?> - レビュー</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($restaurant['name']); ?>のレビュー</h1>
    </header>

    <div class="restaurant-detail">
        <h2>カテゴリ: <?php echo htmlspecialchars($restaurant['category']); ?></h2>
        <p>評価: <?php echo htmlspecialchars($restaurant['rating']); ?></p>
        <p>住所: <?php echo htmlspecialchars($restaurant['address']); ?></p>
        <p>電話番号: <?php echo htmlspecialchars($restaurant['phone']); ?></p>
        <p>説明: <?php echo htmlspecialchars($restaurant['description']); ?></p>
    </div>

    <h3>レビュー一覧</h3>
    <div class="reviews">
        <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <p><strong><?php echo htmlspecialchars($review['user_name']); ?></strong> - 評価: <?php echo htmlspecialchars($review['rating']); ?>/5</p>
                <p><?php echo htmlspecialchars($review['comment']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

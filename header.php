<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>かま食</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* headerの全体的なレイアウト */
        header {
            background-color: #006400; /* 緑 */
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between; /* ロゴとメニューを両端に配置 */
            align-items: center; /* 垂直方向に中央揃え */
            position: relative; /* 検索ボックスとハンバーガーメニューの位置調整のため */
        }

        /* ロゴとサイト名を横並びにする */
        .logo-container {
            display: flex;
            align-items: center; /* ロゴとサイト名を垂直方向に中央揃え */
        }

        /* サブタイトルのスタイル */
        .subtitle {
            font-size: 30px; /* サブタイトルのサイズを大きく設定 */
            color: #fff;
            margin-left: 15px; /* サイト名との間にスペースを追加 */
            font-style: italic;
        }

        /* ロゴのスタイル */
        .logo img {
            width: 100px;  /* ロゴのサイズを調整 */
            height: auto;
            margin-right: 15px; /* ロゴとサイト名の間にスペースを追加 */
        }

        /* サイト名のスタイル */
        h1 {
            font-size: 60px;
            margin: 0; /* 余白を削除 */
        }

        /* ハンバーガーメニュー */
        .hamburger {
            display: none; /* 初期状態では非表示 */
            cursor: pointer;
            flex-direction: column;
            gap: 4px;
            width: 30px;
            height: 21px;
            position: absolute;
            right: 80px; /* 検索ボックスと重ならないように右側に配置 */
        }

        .hamburger div {
            background-color: white;
            height: 4px;
            width: 100%;
            border-radius: 2px;
        }

        /* ナビゲーションメニュー */
        nav ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        /* 検索ボックス */
        .search-container {
            position: absolute;
            right: 20px; /* 右端に配置 */
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 250px;  /* 検索ボックスの幅を調整 */
        }

        .search-button {
            background-color: #4CAF50; /* 緑 */
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-button:hover {
            background-color: #45a049; /* ボタンホバー時に色を変更 */
        }

        /* メニューが閉じられている状態 */
        .menu {
            display: none; /* 初期状態では非表示 */
        }

        /* メニューが開いた時 */
        .menu.open {
            display: block;
            width: 250px; /* メニューの幅 */
            height: 100%; /* メニューの高さ */
            background-color: #006400; /* 背景色 */
            position: absolute;
            top: 0;
            right: 0; /* 右側から表示 */
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
            transform: translateX(100%); /* 初期位置は画面外 */
            transition: transform 0.3s ease-in-out; /* スライドインアニメーション */
        }

        /* メニューが開いた時 */
        .menu.open.active {
            transform: translateX(0); /* メニューがスライドインする */
        }

        /* メニューのリンク */
        .menu a {
            display: block;
            margin: 10px 0;
            font-size: 20px;
        }

        /* モバイル用メニュー（ハンバーガーアイコン表示時） */
        @media (max-width: 768px) {
            /* ナビゲーションの表示変更 */
            nav ul {
                display: none; /* 初期状態で非表示 */
            }

            .hamburger {
                display: flex; /* ハンバーガーメニューアイコン表示 */
            }
        }

        /* デスクトップ表示でもハンバーガーメニュー表示 */
        @media (min-width: 769px) {
            .hamburger {
                display: flex; /* ハンバーガーメニューアイコン表示 */
            }

            /* デスクトップでメニューを横並びに表示 */
            nav ul {
                display: flex;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <div class="logo">
                <img src="images/logo.jpg" alt="ロゴ">
            </div>
            <div class="site-name">
                <h1>かま食</h1>
                <div class="subtitle">～昼食と居酒屋検索サイト～</div> <!-- サブタイトル追加 -->
            </div>
        </div>

        <!-- ハンバーガーメニューアイコン -->
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <nav>
            <ul class="menu">
                <li><a href="#">ホーム</a></li>
                <li><a href="#">レビュー</a></li>
                <li><a href="#">カテゴリ検索</a></li>
                <li><a href="#">アカウント</a></li>
            </ul>
        </nav>

        <!-- 検索ボックス -->
        <div class="search-container">
            <form action="#" method="GET">
                <input type="text" name="search" placeholder="商品を検索..." class="search-input">
                <button type="submit" class="search-button">検索</button>
            </form>
        </div>
    </header>

    <script>
        // ハンバーガーメニューの表示・非表示を切り替える
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('active'); // メニューの表示を切り替え
        }
    </script>
</body>
</html>

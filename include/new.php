<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生管理系統-新增學生</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>學生管理系統</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">首頁</a></li>
            <li><a href="list.php">學生列表</a></li>
            <li><a href="new.php">新增學生</a></li>
            <li><a href="about.php">關於</a></li>
        </ul>
    </nav>
    <main>
        <h2>歡迎來到學生管理系統</h2>
        <p>新增學生</p>
    </main>
        <?php include "footer.php"; ?>
</body>
</html>
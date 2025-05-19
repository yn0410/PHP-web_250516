<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生管理系統</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    for($i=0; $i<5; $i++){
        // include "header.php";
        include_once "header.php";
    }
    // require "header.php";
    ?>
    <main>
        <h2>歡迎來到學生管理系統</h2>
        <p>請從上方選單選擇功能。</p>
    </main>
    <?php 
    include "footer.php";
    // require "footer.php";
    ?>
</body>
</html>
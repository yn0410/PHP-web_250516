<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生管理系統</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.php";?>
    <?php 
    $page=isset($_GET['page'])?$_GET['page']:'main';
    switch($page){
        case 'list':
            include "list.php";
            break;
        case 'new':
            include "new.php";
            break;
        case 'query':
            include "query.php";
            break;
        case 'about':
            include "about.php";
            break;
        default:
            include "main.php";
    }

    ?>
    <?php include "footer.php";?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            align-items: center;

            width: 600px;
            height: 300px;
            background-color: lightblue;

        }
    </style>
</head>
<body>
    <!-- PHP L1的練習2 => 登入檢查 -->
     <?php
    // if(!isset($_SESSION['login'])){

    ?>
    <form action="check.php" method='post'>
        <div class="container">
            <div>
                <label for="acc">帳號：</label>
                <input type="text" name="acc" step="0.01" min="0" required>
            </div>
            <div>
                <label for="pw">密碼：</label>
                <input type="text" name="pw">
            </div>

        </div>
        
        <input type="submit" value="登入">
        <input type="reset" value="清空內容">
    </form>
    <?php
    // }elseif(isset($_SESSION['login']) && $_SESSION['login'] == 1){
    //     echo "登入成功";
    // }else{
    //     echo "登入失敗";
    // }
    
    ?>
    
</body>
</html>



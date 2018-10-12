<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>寻找最好看的女孩</title>
    <!--<link rel="stylesheet" href="../css/reset.css">-->
    <link rel="stylesheet" href="../css/FindBeautifulGirls.css">
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/FindBeautifulGirls.js?rsdfsdf"></script>
</head>
<body>
    <div class="wrap">
        <div class="left">
            <h1>昵称：
                <?php
                   session_start();
                   if(empty($_SESSION['nickname'])){
                       header("Location: login.html");
//                       echo "<script>window.location.href='login.html'</script>";
                   }
                   echo  $_SESSION['nickname'];
                ?>
                </h1>
            <h1>分数:</h1>
            <span class="score">0</span>
            <h1>时间:</h1>
            <span class="time">60</span>
            <p>
                <button class="cancelLogin">注销登录</button>
            </p>


        </div>
        <div class="content">
            <h1>寻找最美女孩</h1>
            <div class="game">
                <div><img src="../img/girls/1.jpg" alt=""></div>
                <div><img src="../img/girls/2.jpg" alt=""></div>
                <div><img src="../img/girls/3.jpg" alt=""></div>
                <div class="special"><img src="../img/girls/4.jpg" alt=""></div>
            </div>
        </div>
        <div class="right">
            <h1>排行榜</h1>
            <ol>
                <!--<li>昵称:100分</li>-->
                <!--<li>昵称:200分</li>-->
                <!--<li>昵称:300分</li>-->
                <!--<li>昵称:400分</li>-->
                <!--<li>昵称:500分</li>-->
            </ol>
            <button class="flushBtn">刷新</button>
        </div>
    </div>
</body>
</html>
<?php
    session_start();
    echo"세션시작!!!<br>";

    $_SESSION['userid']="ocella";
    $_SESSION['username']="박영준";
    echo "세션 등록 완료!!!<br>";

    echo $_SESSION['userid']."<br>";
    echo $_SESSION['username']."<br>";
?>
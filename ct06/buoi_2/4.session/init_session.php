<?
    if(session_id() === '') session_start();
    //Đếm số lần truy cập website
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] += 1;
    } else{
        $_SESSION['counter'] = 1;
    }
?>
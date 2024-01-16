<?
    //Tự động gọi các class tương ứng

    spl_autoload_register(
        function($className){
            $fileName = strtolower($className) . ".php";
            //Tên lớp tướng ứng với tên file chứa lớp
            $dirRoot = dirname(__DIR__);
            require $dirRoot . "/classes/{$fileName}";
        }
    );
    require dirname(__DIR__) . "/config.php";
    if(session_id() === '') session_start();
?>
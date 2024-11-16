
<?php
    session_start();
    ob_start();
    if (!isset($_SESSION['role'])) {
        // Nếu session không tồn tại, chuyển hướng về trang đăng nhập
        header('Location: http://localhost/Freshfruits/index.php?act=login');
        exit();
    } else {
        include "../model/connectdb.php";
        include "view/sidebar.php";
        include "view/header.php";
        include "view/content.php";

        if(isset($_GET['act'])) {
            switch ($_GET['act']) {

                case 'thoat':
                    if(isset($_SESSION['role'])) {
                        session_unset(); 
                        session_destroy();
                        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
                        header("Cache-Control: post-check=0, pre-check=0", false);
                        header("Pragma: no-cache");
                    }
                    header('Location: http://localhost/Freshfruits/index.php?act=login');
                case 'donhang':
                    include "view/donhang.php";
                    break;
                default:
                    include "view/home.php";
                    break;
            }
        } else {
            include "view/home.php";
        }   
    }
?>
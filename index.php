<?php
    session_start();
    ob_start();
    include "./model/connectdb.php";
    include "./model/navigation.php";
    include "./model/user.php";
    include "./model/sanpham.php";
    include "./model/loaisanpham.php";
    include "./model/blog.php";
    include "./model/blogtype.php";

    // Kiểm tra `act` để xác định header nào cần include
    if (isset($_GET['act']) && $_GET['act'] !== '') {
        switch ($_GET['act']) {
            case 'about':
            case 'shop':
            case 'contact':
            case 'blog':
            case 'login':
            case 'register':
            case 'profile':
            case 'wishlist':
                //lấy tất cả nav
                $kq=getall_nav();
                include "view/header.php"; // Header cho các case
                break;
            default:
                //lấy tất cả nav
                $kq=getall_nav();
                include "view/header_home.php"; // Header cho default
                break;
        }
    } else {
        include "view/header_home.php"; // Header khi không có `act`
    }

    // Xử lý nội dung trang
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'about':
                $allblogtype=getall_blogtype();
                $allblog=getall_blog();
                include "view/about.php";
                break;
            case 'shop':
                include "view/shop.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;
            case 'blog':
                $allblogtype=getall_blogtype();
                $allblog=getall_blog();
                $rowCount = count($allblog);
                include "view/blog.php";
                break;
            case 'new_blog':
                if (isset($_GET['id'])&&($_GET['id'])) {
                    $allblogtype=getall_blogtype();
                    $allblog=getall_blog();
                    $id=$_GET['id'];
                    $curblog=getone_blog($id);
                }
                include "view/newblog.php";
                break;
            case 'signout':
                unset($_SESSION['role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['user']);
                session_destroy();
                header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
                header("Cache-Control: post-check=0, pre-check=0", false);
                header("Pragma: no-cache");

                header('location: index.php');
                break;
            case 'loginform': 
                if (isset($_POST['login'])&&($_POST['login'])) {
                    $email=$_POST['email'];
                    $pass=$_POST['password'];
                    $kq=getuserinfo($email, $pass);
                    $role=$kq[0]['role'];
                    if ($role==1) {
                        $_SESSION['role']=$role;
                        header('location: admin/index.php');
                    } else {
                        $_SESSION['role']=$role;
                        $_SESSION['iduser']=$kq[0]['idUser'];
                        $_SESSION['user']=$kq[0]['tennd'];
                        $_SESSION['avt']=$kq[0]['avatar'];
                        
                        header('location: index.php');
                        break;
                    }
                }
            case 'login':
                include "view/login.php";
                break;

            case 'registerform':
                if (isset($_POST['register'])&&($_POST['register'])) {
                    $name=$_POST['fullname'];
                    $email=$_POST['email'];
                    $pass=$_POST['password'];
                    
                    adduser($name, $email, $pass);
                    header('location: index.php?act=login');
                    break;
                }
            case 'register':
                include "view/register.php";
                break;
            case 'profile':
                if (!isset($_SESSION['iduser'])) {
                    header('location: login.php'); // Chuyển hướng về trang login nếu chưa đăng nhập
                } else {
                    $id = $_SESSION['iduser'];
                    $user=getuserinfofromid($id);
                }
                include "view/profile.php";
                break;
            case 'wishlist':
                include "view/wishlist.php";
                break;
            default:
                $allcategory=getall_category(); 
                $allblogtype=getall_blogtype();
                $allblog=getall_blog();
                $allsp=getall_sp();
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

    include "view/footer.php";                                            
?>

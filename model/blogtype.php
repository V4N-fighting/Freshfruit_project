<?php 

    //get 1 loại blog
    function getone_blogtype($id) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM blogtype WHERE idBlogtype=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    // get tất cả loại blog
    function getall_blogtype() {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM blogtype");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $allblogtype=$stmt->fetchAll();
        return $allblogtype;
    }

    //Thêm blog
    // function addblog($idlblog, $tenblog, $gia, $img) {
    //     $conn=connectdb();
    //     // $sql = "INSERT INTO product (tenblog) VALUES ('".$tenblog."')";

    //     $sql = "INSERT INTO product (idCategory, tenblog, gia, img1) VALUES ('$idlblog', '$tenblog', '$gia', '$img')";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }

    //Xóa blog
    // function delblog($id) {
    //     $conn=connectdb();
    //     // sql to delete a record
    //     $sql = "DELETE FROM product WHERE idBlog=".$id;

    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }

    //update blog
    // function updateblog($idlblog, $tenblog, $gia, $img, $id) {
    //     $conn=connectdb();
    //     if ($img=="") {
    //         $sql = "UPDATE product SET tenblog='".$tenblog."', gia='".$gia."', idCategory='".$idlblog."' WHERE idBlog=".$id;
    //     } else {
    //         $sql = "UPDATE product SET tenblog='".$tenblog."', gia='".$gia."', idCategory='".$idlblog."', img1='".$img."' WHERE idBlog=".$id;
    //     }

    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
      
    //     // execute the query
    //     $stmt->execute();
    // }
?>
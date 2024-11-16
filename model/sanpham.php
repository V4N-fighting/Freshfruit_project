<?php 

    //get 1 sản phẩm
    function getone_sp($id) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM product WHERE idProduct=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    // get tất cả sản phẩm
    function getall_sp() {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM product");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    //Thêm sản phẩm
    function addsp($idlsp, $tensp, $gia, $img) {
        $conn=connectdb();
        // $sql = "INSERT INTO product (tensp) VALUES ('".$tensp."')";

        $sql = "INSERT INTO product (idCategory, tensp, gia, img1) VALUES ('$idlsp', '$tensp', '$gia', '$img')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    //Xóa sản phẩm
    function delsp($id) {
        $conn=connectdb();
        // sql to delete a record
        $sql = "DELETE FROM product WHERE idProduct=".$id;

        // use exec() because no results are returned
        $conn->exec($sql);
    }

    //update sản phẩm
    function updatesp($idlsp, $tensp, $gia, $img, $id) {
        $conn=connectdb();
        if ($img=="") {
            $sql = "UPDATE product SET tensp='".$tensp."', gia='".$gia."', idCategory='".$idlsp."' WHERE idProduct=".$id;
        } else {
            $sql = "UPDATE product SET tensp='".$tensp."', gia='".$gia."', idCategory='".$idlsp."', img1='".$img."' WHERE idProduct=".$id;
        }

        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
    }
?>
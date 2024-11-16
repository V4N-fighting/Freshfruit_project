<?php 

    // //get 1 loại hàng
    // function getone_lsp($id) {
    //     $conn=connectdb();
    //     $stmt = $conn->prepare("SELECT * FROM category WHERE idCategory=".$id);
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $kq=$stmt->fetchAll();
    //     return $kq;
    // }

    // check user => return role để check là user hay là admin
    function checkuser($email, $pass) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email='".$email."' AND pass='".$pass."'" );
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if (count($kq)>0) {
            return $kq[0]['role'];
        } else {
            return 0;
        }
    }

    

    // getuserinfo
    function getuserinfo($email, $pass) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE email='".$email."' AND pass='".$pass."'" );
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

     function getuserinfofromid($id) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM user WHERE idUser=".$id );
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user=$stmt->fetchAll();
        return $user;
    }

    // //Thêm loại hàng
    function adduser($name, $email, $pass) {
        $conn=connectdb();

        $sql = "INSERT INTO user (tennd, email, pass) VALUES ('$name', '$email', '$pass')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    // //Xóa loại hàng
    // function dellsp($id) {
    //     $conn=connectdb();
    //     // sql to delete a record
    //     $sql = "DELETE FROM category WHERE idCategory=".$id;

    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    // }

    // //update loại hàng
    // function updatelsp($id, $tenlsp) {
    //     $conn=connectdb();
    //     $sql = "UPDATE category SET tenloaisp='".$tenlsp."' WHERE idCategory=".$id;

    //     // Prepare statement
    //     $stmt = $conn->prepare($sql);
      
    //     // execute the query
    //     $stmt->execute();
    // }


?>
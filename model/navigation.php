<?php 

    //get 1 navigation
    function getone_nav($id) {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM navigation WHERE idNavigation=".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    // get tất cả navigation
    function getall_nav() {
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM navigation");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    //Thêm navigation
    function addnav($tennav) {
        $conn=connectdb();
        $sql = "INSERT INTO navigation (tennav) VALUES ('".$tennav."')";

        // $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    //Xóa navigation
    function delnav($id) {
        $conn=connectdb();
        // sql to delete a record
        $sql = "DELETE FROM navigation WHERE idNavigation=".$id;

        // use exec() because no results are returned
        $conn->exec($sql);
    }

    //update navigation
    function updatenav($id, $tennav) {
        $conn=connectdb();
        $sql = "UPDATE navigation SET tennav='".$tennav."' WHERE idNavigation=".$id;

        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
    }
?>
<?php
    include_once('../../inc/conn.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_slots WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ManageParkingSlots.php?msg=Deleted Slot Successfully");
    } else {
        echo "Error";
    }


?>
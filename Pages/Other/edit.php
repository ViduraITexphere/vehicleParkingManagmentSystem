<?php
    include_once('../../inc/conn.php');
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        //declaring variables and assign empty values
        $status = $_POST['status'];
        $type = $_POST['type'];

        //INSERT Values into database
        $query1 = "UPDATE `tbl_slots` SET `type`='$type',`status`='$status' WHERE id=$id";
        $showResult = mysqli_query($conn, $query1); 
        if ($showResult) {
            header("Location: ManageParkingSlots.php?msg=data Updated successfully");
        } else {
            echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
        }




    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
    body {
        display: flex;
        min-height: 100vh;
    }

    [class*="col"] {
        padding: 0;
        margin: 0;
    }

    .sidebar {
        background-color: lightblue;
        height: 100vh;
        padding: 0;
        margin: 0;
    }

    /* //////////////////////You can edit this ////////////////////// */

    .form_wrapper {
        width : 70%;
        /* background-color: #f7f7f7; */
        padding: 70px;
        margin: 0 auto;
        margin-top: 100px;
        border-radius: 4px;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include "Drawer.php" ?>
            </div>
            <div class="col-md-10">
                <div class="content">
                    <?php
                   
                    // $slot_id = isset($_GET['slot_id']) ? $_GET['slot_id'] : '';
                    $query = "SELECT * FROM tbl_slots WHERE id = $id LIMIT 1";
                    $showResult = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($showResult);
                    ?>
                    <div class="form_wrapper">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slot</label>
                                <input type="text" class="form-control" value="<?php echo $row['id'] ?>">
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slot Type</label>
    
                            <select selected="<?php echo $row['type'] ?>" class="form-select" name="type">
                                <!-- <option value="<?php echo $row['type'] ?>" selected><?php echo $row['type'] ?></option> -->
                                <!-- <option >Light Vehicle</option>
                                <option >Heavy Vehicle</option>
                                <option >Container</option> -->
                                <!-- <option value="Light Vehicle"<?php if ($row['type'] == 'Light Vehicle') echo ' selected="selected"'; ?>>Light Vehicle</option> -->
                                <option value="Light Vehicle"<?=$row['type'] == 'Light Vehicle' ? ' selected="selected"' : '';?>>Light Vehicle</option>
                                <option value="Heavy Vehicle"<?=$row['type'] == 'Heavy Vehicle' ? ' selected="selected"' : '';?>>Heavy Vehicle</option>
                                <option value="Container"<?=$row['type'] == 'Container' ? ' selected="selected"' : '';?>>Container</option>



                               

                          
                            </select>
                            
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
    
                            <select class="form-select"  name="status" value="<?php echo $row['status'] ?>">
                            <option value="Available"<?=$row['type'] == 'Available' ? ' selected="selected"' : '';?>>Available</option>
                            <option value="Unavailable"<?=$row['type'] == 'Unavailable' ? ' selected="selected"' : '';?>>Unavailable</option>

                          
                            </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
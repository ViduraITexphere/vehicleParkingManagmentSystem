<?php
include_once('../../inc/conn.php');

if (isset($_POST['submit'])) {
    //declaring variables and assign empty values
    $slot_id = $_POST['slot_id'];
    $status = $_POST['status'];
    $type = $_POST['type'];

    //INSERT Values into database
    $query1 = "INSERT INTO tbl_slots(id, status, type) VALUES (NULL,'{$status}', '{$type}')";
    $showResult = mysqli_query($conn, $query1);

    if ($showResult) {
        header("Location: ManageParkingSlots.php?msg=Slot Added Successfully");
    } else {
        echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

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
            width: 60%;
            /* background-color: #f7f7f7; */
            padding: 70px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 4px;
        }

        .btn-secondary {
            background-color: #141414 !important;
            border: 1px solid #f7f7f7;
            color: #000;
        }

        .form-control:valid {
            border: 1px solid #4e4e4e !important;
        }

        .bootstrap-select {
            color: red !important;
            background: blue !important;
            border: 1px solid red !important;
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

                    <div class="form_wrapper">
                        <form action="AddParkingSlot.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slot</label>
                                <input type="text" class="form-control" placeholder="Slot ID" disabled>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slot Type</label>

                                <select class="form-select" aria-label="Active" name="type" style="border: 1px solid #b3b3b3;">
                                    <option selected>Light Vehicle</option>
                                    <option selected>Heavy Vehicle</option>
                                    <option selected>Container</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>

                                <select class="form-select" aria-label="Active" name="status" style="border: 1px solid #b3b3b3;">
                                    <option selected>Available</option>
                                    <option selected>Unavailable</option>

                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-secondary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
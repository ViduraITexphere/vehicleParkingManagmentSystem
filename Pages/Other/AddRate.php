<?php
include_once('../../inc/conn.php');
if (isset($_POST['submit'])) {
    //declaring variables and assign empty value

    $ratename = $_POST['ratename'];
    $category = $_POST['category'];
    $type = $_POST['type'];
    $rate = $_POST['rate'];
    $status = $_POST['status'];



    //INSERT Values into database
    $query1 = "INSERT INTO tbl_rate(id, ratename, category, type, rate, status) VALUES (NULL,'{$ratename}','{$category}','{$type}','{$rate}', '{$status}')";
    $showResult = mysqli_query($conn, $query1);

    if ($showResult) {
        header("Location: ManageRating.php?msg=Slot Added Successfully");
    } else {
        echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/OtherPageStyles/UserStyles/AddRate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <title>Document</title>
    <style>
        [class*="col"] {
            padding: 0;
            margin: 0;
            background-color: #f7f7f7;
        }

        .column1 {
            background-color: #ffffff;
        }

        .column2 {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <!---------Sidebar----------------------->
                <?php include "Drawer.php" ?>
            </div>
            <div class="col-md-10">
                <div class="content">
                    <div class="content_wrapper">
                        <h2>Add Rate</h2>
                        <div class="form-wrapper">
                            <form action="AddRate.php" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rate Name</label>
                                    <input name="ratename" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select class="form-control" name="category">
                                        <option>Moterbike</option>
                                        <option>Car</option>
                                        <option>SUV</option>
                                        <option>Van</option>
                                        <option>Bus</option>
                                        <option>Container</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Type</label>
                                    <select class="form-control" name="type">
                                        <option>Fixed</option>
                                        <option>Hourly</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rate</label>
                                    <input name="rate" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select class="form-control" name="status">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                                <div class="button-submit">
                                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
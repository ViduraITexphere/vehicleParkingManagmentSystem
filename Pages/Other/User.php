<?php
include_once('../../inc/conn.php');
// $id = $_GET['id'];

if (isset($_POST['submit'])) {
    //declaring variables and assign empty values
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];



    //INSERT Values into database
    $query1 = "UPDATE `tbl_user` SET `fname`='$fname',`lname`='$lname', `email`='$email',`pwd`='$pwd', `contact`='$contact',`address`='$address', ,`user_type`='$user_type' WHERE id=$id";
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
    <link rel="stylesheet" href="../../css/OtherPageStyles/UserStyles/User.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
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
                    <?php
                    include_once('../../inc/conn.php');
                    $id = $_GET['id'];
                    $query = "SELECT * FROM tbl_user WHERE id=$id";
                    $showResult = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($showResult);

                    ?>
                    <div class="content_wrapper">
                        <h2>Manage User</h2>
                        <div class="form-wrapper">
                            <form action="User.php" method="post">
                                <div class="form-inside-wrapper">
                                    <div class="form-devider">
                                        <div class="column1">
                                            <div class="form-group">

                                                <label for="exampleInputPassword1">User Id</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="First Name" name="id" value="<?php echo $row['id'] ?>">
                                            </div>
                                            <div class="form-group">

                                                <label for="exampleInputPassword1">First Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="First Name" name="fname"
                                                    value="<?php echo $row['fname'] ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter email" name="email"
                                                    value="<?php echo $row['email'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password" name="pwd" value="<?php echo $row['pwd'] ?>">
                                            </div>

                                        </div>
                                        <div class="column2">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Last Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Last Name" name="lname"
                                                    value="<?php echo $row['lname'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone Number</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Phone Number" name="contact"
                                                    value="<?php echo $row['contact'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Phone Number" name="address"
                                                    value="<?php echo $row['address'] ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">User Group</label>

                                                <select class="form-select" name="user_type"
                                                    value="<?php echo $row['user_type'] ?>">
                                                    <option value="Available"
                                                        <?= $row['user_type'] == 'Available' ? ' selected="selected"' : ''; ?>>
                                                        User</option>
                                                    <option value="Unavailable"
                                                        <?= $row['user_type'] == 'Unavailable' ? ' selected="selected"' : ''; ?>>
                                                        Admin</option>


                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="button-submit">
                            <button name="submit" type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
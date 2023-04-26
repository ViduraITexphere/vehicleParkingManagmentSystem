<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            width: 70%;
            /* background-color: #f7f7f7; */
            padding: 30px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 4px;
        }

        .content {
            padding: 20px 40px;
        }

        .search_wrapper {
            width: 600px;
            padding: 20px 40px 10px 40px;
        }

        .heading {
            font-weight: 600;
            margin: 20px 40px;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php include "Drawer.php" ?>
            </div>
            <div class="col-md-10">
                <div class="heading">
                    <h2>Manage Parking</h2>
                </div>
                <div class="search_wrapper">
                    <form action="ManageParkingSlots.php" method="get">
                        <!-- <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search by Slot ID" name="search"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                            </div>
                        </div> -->
                        <div class="search">
                            <form action="ManageParkingSlots.php" method="get">
                                <input type="text" name="search" placeholder="Search" class="form-control">
                            </form>

                        </div>

                    </form>
                </div>
                <div class="content">
                    <?php
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        echo
                        "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                           $msg
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
                    }

                    ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Parking ID</th>
                                <th scope="col">Check In Time</th>
                                <th scope="col">Check In Date</th>
                                <th scope="col">Check Out Time</th>
                                <th scope="col">Check Out Date</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Slot</th>
                                <th scope="col">Total Time</th>
                                <th scope="col">Paid Status</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('../../inc/conn.php');
                            if (isset($_GET['search'])) {
                                $search = mysqli_real_escape_string($conn, $_GET['search']);
                                $query = "SELECT * FROM tbl_slots WHERE (type LIKE '%{$search}%' OR status LIKE '%{$search}%') ORDER BY id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['type'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                                <i class="fa-solid fa-trash fs-5"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php
                                }
                            } else {
                                $sql = "SELECT * FROM tbl_parking";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['check_in_time'] ?></td>
                                        <td><?php echo $row['check_in_date'] ?></td>
                                        <td><?php echo $row['check_out_time'] ?></td>
                                        <td><?php echo $row['check_out_date'] ?></td>
                                        <td><?php echo $row['vehicle_type'] ?></td>
                                        <td><?php echo $row['total_rate'] ?></td>
                                        <td><?php echo $row['slot'] ?></td>
                                        <td><?php echo $row['total_time'] ?></td>
                                        <td><?php echo $row['paid_status'] ?></td>


                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                                            </a>
                                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                                <i class="fa-solid fa-trash fs-5"></i>
                                            </a>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }

                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</body>

</html>
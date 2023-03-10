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
        .column1{
            background-color: #ffffff;
        }
        .column2{
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
                        <h2>Manage User</h2>
                        <div class="form-wrapper">
                            <form>
                                <div class="form-inside-wrapper">
                                    <div class="form-devider">
                                        <div class="column1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Groups</label>
                                                <select class="form-control">
                                                    <option>User</option>
                                                    <option>Admin</option>
                                                    <option>Super Admin</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="User Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="column2">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">First Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Last Name</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone Number</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone Number</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Gender</label>

                                                <select class="form-select" aria-label="Active" name="status"
                                                    style="border: 1px solid #b3b3b3;">
                                                    <option selected>Mail</option>
                                                    <option selected>Female</option>
                                                    <option selected>Intersex</option>
                                                    <option selected>Trans</option>
                                                    <option selected>Non-Conforming</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="button-submit">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
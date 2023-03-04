<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/OtherPageStyles/UserStyles/User.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="">
            <!---------Sidebar----------------------->
            <?php include "../../Components/UI/Sidebar/Sidebar.php" ?>
        </div>

        <div class="content">
            <div class="content_wrapper">
                <h2>Manage User</h2>
                <div class="form-wrapper">
                    <form>
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="User Name">
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
                        <div class="form-group">
                            <label for="exampleInputPassword1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="inlineRadio1">Gender</label>
                            &nbsp
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>

                        <div class="form-check form-check-inline">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            &nbsp
                            &nbsp
                            <button type="submit" class="btn btn-danger">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
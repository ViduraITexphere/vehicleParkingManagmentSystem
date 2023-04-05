<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">



    <title>Document</title>
    <style>
        .sidebar {
            background-color: #141414;
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        .sidebar_menu {
            display: flex;
            flex-direction: column;
        }

        .sidebar_menu_item {
            display: flex;
            align-items: center;
            padding: 25px;
            font-size: 14px;
            font-weight: 300;
            cursor: pointer;
            gap: 10px;

        }

        .sidebar_menu_item a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar_menu_item:hover {
            background-color: #1e1e1e;
        }

        .sidebar_logo {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            padding: 20px;
            gap: 10px;

        }

        .sidebar_logo img {
            width: 50px;
            height: 50px;
        }

        hr {
            border-top: 1px solid gray;
            margin: 0;
            padding: 0;
        }

        .sidebar_menu_item i {
            font-size: 20px;
            color: aliceblue;
        }
    </style>
</head>

<body>
    <!---------Sidebar----------------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <div class="row">

        <div class="sidebar">
            <div class="sidebar_logo">
                <img src="../../Assets/Images/logo.png" alt="logo">
            </div>
            <hr />
            <div class="sidebar_menu">
                <div class="sidebar_menu_item">
                    <i class="bi bi-p-square-fill"></i>
                    <a href="ManageUsers.php" type="text" data-toggle="dropdown" style="color:aliceblue">
                        Manage User
                    </a>
                </div>
                <div class="sidebar_menu_item">
                    <i class="bi bi-person-fill"></i>
                    <a href="Users.php">Groups</a>
                </div>
                <div class="sidebar_menu_item">
                    <i class="bi bi-people-fill"></i>
                    <a href="Groups.php">Category</a>
                </div>
                <div class="sidebar_menu_item">
                    <i class="bi bi-p-square-fill"></i>
                    <a type="text" data-toggle="dropdown" style="color:aliceblue">
                        Rate
                        <i class="bi bi-caret-down-fill"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="color:black; background-color: black; height:100px;">
                        <a class="dropdown-item" href="../../Pages/Other/AddRate.php">Add Rating</a>
                        <a class="dropdown-item" href="../../Pages/Other/ManageRating.php">Manage Rating</a>

                    </div>
                </div>
                <div class="sidebar_menu_item">
                    <i class="bi bi-p-square-fill"></i>
                    <a type="text" data-toggle="dropdown" style="color:aliceblue">
                        Parking Slots
                        <i class="bi bi-caret-down-fill"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="color:black; background-color: black; height:100px;">
                        <a class="dropdown-item" href="../../Pages/Other/AddParkingSlot.php">Add Parking Slot</a>
                        <a class="dropdown-item" href="../../Pages/Other/ManageParkingSlots.php">Manage Parking Slot</a>

                    </div>
                </div>
                <div class="sidebar_menu_item">
                    <i class="bi bi-p-square-fill"></i>
                    <a type="text" data-toggle="dropdown" style="color:aliceblue">
                        Parking
                        <i class="bi bi-caret-down-fill"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="color:black; background-color: black; height:100px;">
                        <a class="dropdown-item" href="../../Pages/Other/AddParkingSlot.php">Add Parking</a>
                        <a class="dropdown-item" href="../../Pages/Other/ManageParking.php">Manage Parking</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
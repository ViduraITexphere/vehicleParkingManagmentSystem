<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="../../../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/UIStyles/Sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!---------Sidebar----------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <div class="sidebar">
        <div class="sidebar_wrapper">
            <div class="sidebar_header">
                <div class="sidebar_header_logo">
                    <img src="../../Assets/Images/Logo.png" alt="Logo">
                </div>
                <div class="sidebar_header_title">
                    <h1>Admin</h1>
                </div>
            </div>

            <div class="nav_links">
                <div class="nav_list">
                    <i class="bi bi-person-fill"></i>
                    <a href="../../Pages/Other/User.php">User</a>
                </div>
                <div class="nav_list">
                    <i class="bi bi-people-fill"></i>
                    <a href="../../Pages/Other/Groups.php">Groups</a>
                </div>
                <div class="nav_list">
                    <i class="bi bi-bookmarks-fill"></i>
                    <a href="../../Pages/Other/Category.php">Category</a>
                </div>
                <div class="nav_list">
                    <i class="bi bi-currency-dollar"></i>
                    <a href="index.php">Rate</a>
                </div>
                <div class="nav_list">
                    <i class="bi bi-p-square-fill"></i>
                    <a type="text" data-toggle="dropdown" style="color:aliceblue" >
                        Parking Slots
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="color:black; background-color: black" >
                        <a class="dropdown-item" href="../../Pages/Other/AddParkingSlot.php">Add Parking Slot</a>
                        <a class="dropdown-item" href="../../Pages/Other/ManageParkingSlots.php">Manage Parking Slot</a>
                        
                    </div>
                </div>

                <div class="nav_list">
                    <i class="bi bi-car-front-fill"></i>
                    <a href="index.php">Parking</a>
                </div>
                <div class="nav_list">
                    <i class="bi bi-clipboard-data-fill"></i>
                    <a href="index.php">Reports</a>
                </div>
            </div>

            <!-- <div class="nav_bar_footer">
                  <button href="../../../Pages/Auth/Logout/Logout.php" class="btn btn-primary">Logout</button>
                  </div> -->
            <div class="nav_bar_footer">
            <a href="../../Pages/Auth/Logout/Logout.php" class="btn btn-primary">Logout</a>
            </div>

        </div>





</body>

</html>
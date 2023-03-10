<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="Styles/HomePageStyles/Home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


    <div class="row">
        <div class="">
            <!---------Sidebar----------------------->
            <?php include "../../Components/UI/Sidebar/Sidebar.php" ?>
        </div>





        <!---------Main----------------------->
        <div class="content">
            <div>
                <h2>Parking Managment System Dashboard Control Panel</h2>
                <!-- <?php
      if(isset($_SESSION['user_fname'])){
        echo $_SESSION['user_lname'];
      }
      else {
        echo "No session";
      }
      ?> -->
            </div>
            <div class="content_wrapper">

                <div class="boxes">
                    <div class="box">
                        <h2>250</h2>
                        Total Parking Slots
                    </div>
                    <div class="box">
                        <h2>450</h2>
                        Total Users
                    </div>
                    <div class="box">
                        <h2>150</h2>
                        Total Parking
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
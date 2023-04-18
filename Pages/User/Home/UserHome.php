<?php
include_once('../../../inc/conn.php');

//Inserting data into database
$sql = "SELECT slot_id, type FROM tbl_slots WHERE status = 'Available' ORDER BY slot_id";
$result = mysqli_query($conn, $sql);
// echo "<select name='slot' id='slot' class='form-control'>";
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<option value='" . $row['slot_id'] . "'>" . $row['slot_id'] . " - " . $row['type'] . "</option>";
// }
// echo "</select>";



?>

<?php
include_once('../../../inc/conn.php');

//Inserting data into database
if (isset($_POST['submit'])) {
    $slot_id = $_POST['slot'];
    $check_in_time = $_POST['check_in_time'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_time = $_POST['check_out_time'];
    $check_out_date = $_POST['check_out_date'];
    $vehicle_type = $_POST['vehicle_type'];
    $total_rate = $_POST['total_rate'];
    $total_hours = $_POST['total_hours'];

    $sql = "INSERT INTO tbl_parking (slot, vehicle_type, check_in_date, check_in_time, check_out_date, check_out_time, total_time, rate) VALUES ('$slot_id', '$vehicle_type', '$check_in_date', '$check_in_time', '$check_out_date', '$check_out_time', '$total_hours', '$total_rate')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
}
?>

<body>
    <h1>Parking Management System</h1>
    <form method="POST" action="UserHome.php">
        <select name="slot" id="slot" class="form-control">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['slot_id'] . "'>" . $row['slot_id'] . " - " . $row['type'] . "</option>";
            }
            ?>
        </select>
        <br>
        <label for="vehicle_type">Vehicle Type:</label>
        <select name="vehicle_type" id="vehicle_type">
            <option value="car" selected>Car</option>
            <option value="motorbike">Motorbike</option>
            <option value="van">Van</option>
        </select>
        <br>

        <label for="check_in_date">Check-in Date:</label>
        <input type="date" name="check_in_date" id="check_in_date" value="2023-04-10">
        <br>

        <label for="check_in_time">Check-in Time:</label>
        <input type="time" name="check_in_time" id="check_in_time" value="08:00">
        <br>

        <label for="check_out_date">Check-out Date:</label>
        <input type="date" name="check_out_date" id="check_out_date" value="2023-04-10">
        <br>

        <label for="check_out_time">Check-out Time:</label>
        <input type="time" name="check_out_time" id="check_out_time" value="09:00">
        <br>

        <label for="total_hours">Total Hours:</label>
        <input type="number" name="total_hours" id="total_hours" value="1" readonly>
        <br>

        <label for="hourly_rate">Hourly Rate:</label>
        <span id="hourly_rate">Rs 4.00</span>
        <br>

        <label for="total_rate">Total Rate:</label>
        <span name="total_rate" id="total_rate">Rs 0.00</span>
        <input type="text" name="total_rate" id="total_rate">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Define the hourly rates for each vehicle type
            var hourly_rates = {
                'motorbike': 30,
                'car': 50,
                'van': 70
            };

            // Set a default hourly rate
            var default_hourly_rate = 20;

            // Set default values
            var vehicle_type = 'car';
            var total_hours = 0;
            var check_in_date = $('#check_in_date').val();
            var check_in_time = $('#check_in_time').val();
            var check_out_date = $('#check_out_date').val();
            var check_out_time = $('#check_out_time').val();

            // Get the hourly rate for the selected vehicle type
            var hourly_rate = hourly_rates[vehicle_type] || default_hourly_rate;

            // Calculate the total hours based on check-in and check-out times
            var updateTotalHours = function() {
                check_in_date = $('#check_in_date').val();
                check_in_time = $('#check_in_time').val();
                check_out_date = $('#check_out_date').val();
                check_out_time = $('#check_out_time').val();
                var check_in = new Date(check_in_date + 'T' + check_in_time);
                var check_out = new Date(check_out_date + 'T' + check_out_time);
                var diff_in_ms = Math.abs(check_out - check_in);
                total_hours = diff_in_ms / (1000 * 60 * 60);
                $('#total_hours').val(total_hours);
            };


            // Update the hourly rate and calculate the total rate
            var updateRates = function() {
                vehicle_type = $('#vehicle_type').val();

                // Get the hourly rate for the selected vehicle type from the hourly_rates object
                hourly_rate = hourly_rates[vehicle_type] || default_hourly_rate;

                // Calculate the total rate based on the hourly rate and total hours
                total_rate = hourly_rate * total_hours;

                // Display the hourly rate and total rate to the user
                $('#hourly_rate').text('Rs ' + hourly_rate.toFixed(2));
                $('#total_rate').text('Rs ' + total_rate.toFixed(2));
            };

            // Call the updateTotalHours function to calculate the total hours
            updateTotalHours();

            // Call the updateRates function to update the rates and display them to the user
            updateRates();

            // Add event listeners to update the rates when the user selects a different vehicle type or changes the check-in/check-out times
            $('#vehicle_type').change(updateRates);
            $('#check_in_date, #check_in_time, #check_out_date, #check_out_time').change(function() {
                updateTotalHours();
                updateRates();
            });
        });
    </script>
</body>
<html>
<link rel="stylesheet" href="css/style.css">
<script>
    function alertUser(msg) {
        alert(msg);
    }
</script>



<script>
var msg2 = "                <?php
        $servername = "localhost";
        $username = "carpark";
        $password = "C@rpark123";
        $dbname = "carpark_db";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Escape user inputs for security
        $plateNo = mysqli_real_escape_string($conn, $_REQUEST['plateNo']);
        $slotNo = mysqli_real_escape_string($conn, $_REQUEST['slotNo']);

        // Attempt insert query execution
        $sql = "INSERT INTO test2 (plateNo,slotNo) VALUES ('$plateNo','$slotNo')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?> ";

    <body onload="alertUser(msg2)">

</script>

        <section id="save-parking-action">
            <div class="to-input-1">
                <a href="index.html#save-parking-input-1">
                    <img class="go-back" src="img/previous_page.svg" atl="">
                </a>
            </div>
            <div class="plate-no-info">

                <h4>Your car plate number:</h4>
                <h3><?php echo $_POST["plateNo"]; ?></h3>

                <h4>Your parking space:</h4>
                <h3><?php echo $_POST["slotNo"]; ?></h3>
            </div>

            <div class="find-exit">
                <a href="index.html#map-to-exit"><button id="btn-3">Find the nearest exit</button></a>
            </div>
        </section>
    </body>
</html>
<html>
<link rel="stylesheet" href="css/style.css">





<!-- some section/id/class need to be renamed -->

        <section id="save-parking-action">
            <div class="to-input-1">
                <a href="index.html#retrieve-parking-input-1">
                    <img class="go-back" src="img/previous_page.svg" atl="">
                </a>
            </div>

            <div class="plate-no-info">
                <h4>Your car plate number is:</h4>
                <h3><?php echo $_REQUEST["plateNo"]; ?></h3>

                <h4>Your parking space is:</h4>
                <h3>
                    <?php
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

/*                    // Query data
                    $sql = "SELECT * FROM test2 WHERE plateNo = $_REQUEST["plateNo"];";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultcheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo $row['slotNo'] . "<br>";
                        } 
                    }
 
 */

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </h3>
            </div>

            <div class="find-exit">
                <a href="index.html#map-to-exit"><button id="btn-3">Find the nearest exit</button></a>
            </div>
        </section>
    </body>
</html>
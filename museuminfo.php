<html>
    <head>
    <?php 
                $servername = "localhost";
                $username = "rtosic";
                $password = "NoitBulv";
                $dbname = "rtosic";

                $query = $_GET['id'];

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql1 = "SELECT * FROM museum WHERE museumname='$query'";
                $table = $conn->query($sql1);

                if ($table->num_rows > 0) {
                    // output data of each row
                    while($row = $table->fetch_assoc()) {
                        $date = $row["date"];
                        $location = $row["location"];
                        $people = $row["people"];
                        $famous = $row["artwork"];
                        $photo = $row["photo"];
                    }
                }

                ?>


        <link rel="stylesheet" href="maincss.css">
        <script>
            function finishshop() {
                window.open("shopping.php");
            }
        </script>
    </head>

    <body>
     <?php include 'header.php';?>
        
        <table align="center">
            <tr>
                <td>
                    <img src="<?php echo($photo); ?>">
                </td>
                <td>
                    <p>
                        Date of Establishment
                        <br>
                        <?php echo($date); ?>
                    </p>
                    <br>
                    <p>
                            Location and Address:
                            <br>
                            <?php echo($location); ?>
                        </p>
                        <br>
                        <p>
                                People Involved:
                                <br>
                                <?php echo($people); ?>
                            </p>
                            <br>
                            <p>
                                    Famous Art Work:
                                    <br>
                                    <?php echo($famous); ?>
                                </p>
                </td>
            </tr>
        </table>

    </body>
</html>
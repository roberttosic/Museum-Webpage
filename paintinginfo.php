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

                $sql1 = "SELECT * FROM painting WHERE paintingname='$query'";
                $table = $conn->query($sql1);

                if ($table->num_rows > 0) {
                    // output data of each row
                    while($row = $table->fetch_assoc()) {
                        $date = $row["date"];
                        $type = $row["type"];
                        $location = $row["location"];
                        $artistname = $row["artistname"];
                        $genre = $row["genre"];
                        $photo = $row["photo"];
                        $price = $row["price"];
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
                        Date of Creation:
                        <br>
                        <?php echo($date); ?>
                    </p>
                    <br>
                    <p>
                            Type of the Painting's Colours:
                            <br>
                            <?php echo($type); ?>
                        </p>
                        <br>
                        <p>
                                Current Location of the Painting:
                                <br>
                                <?php echo($location); ?>
                            </p>
                            <br>
                            <p>
                                    Artist Name:
                                    <br>
                                    <?php echo($artistname); ?>
                                </p>
                                <br>
                                <p>
                                        Price (USD):
                                        <br>
                                        <?php echo($price); ?>
                                    </p>
                                    <br>
                                <p>
                                        Genre:
                                        <br>
                                        <?php echo($genre); ?>
                                    </p>
                </td>
            </tr>
        </table>

    </body>
</html>
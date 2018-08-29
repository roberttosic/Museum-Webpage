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

                $sql1 = "SELECT * FROM painter WHERE paintername='$query'";
                $table = $conn->query($sql1);

                if ($table->num_rows > 0) {
                    // output data of each row
                    while($row = $table->fetch_assoc()) {
                        $datebirthdeath = $row["datebirthdeath"];
                        $placeliving = $row["placeliving"];
                        $genre = $row["genre"];
                        $famouspainting1 = $row["famouspainting1"];
                        $famouspainting2 = $row["famouspainting2"];
                        $famouspainting3 = $row["famouspainting3"];
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
                    <img width="600" length="600" src="<?php echo($photo); ?>">
                </td>
                <td>
                    <p>
                        Date of Birth/Death:
                        <br>
                        <?php echo($datebirthdeath); ?>
                    </p>
                    <br>
                    <p>
                            Place of Living:
                            <br>
                            <?php echo($placeliving); ?>
                        </p>
                        <br>
                        <p>
                                Genre of Paitings:
                                <br>
                                <?php echo($genre); ?>
                            </p>
                            <br>
                            <p>
                                    Famous paintings:
                                    <br>
                                    <ul>
                                        <li><?php echo($famouspainting1); ?></li>
                                        <li><?php echo($famouspainting2); ?></li>
                                        <li><?php echo($famouspainting3); ?></li>
                                    </ul>
                                </p>
                </td>
            </tr>
        </table>

    </body>
</html>
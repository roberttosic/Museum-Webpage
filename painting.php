<html>
    <head>
    <?php 
                $servername = "localhost";
                $username = "rtosic";
                $password = "NoitBulv";
                $dbname = "rtosic";

                $query = $_POST["painting"];

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
                        $photo = $row["photo"];
                        $description = $row["description"];
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
                    <img width="300" length="300" src="<?php echo($photo); ?>">
                </td>
                <td>
                    <p>
                        Name of Art Work:
                        <br>
                       <a href="paintinginfo.php?id=<?php echo $query; ?>"><?php echo($query); ?></a> 
                    </p>
                    <br>
                    <p>
                    <?php
                            echo file_get_contents($description); // get the contents, and echo it out.
                    ?>
                    </p>
                    <p>
                        Price (USD):
                        <br>
                        <?php echo($price); ?>
                    </p>
                </td>
            </tr>
        </table>

    </body>
</html>
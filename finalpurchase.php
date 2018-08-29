<html>
<head>
        <?php 
                $servername = "localhost";
                $username = "rtosic";
                $password = "NoitBulv";
                $dbname = "rtosic";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
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
        <br>

    You have spent $<?php echo $_POST["bovquantity"]; ?> dollars on The Breath of Venus painting(s).<br>
    You have spent $<?php echo $_POST["coaquantity"]; ?> dollars on The Creation of Adam painting(s).<br>
    You have spent $<?php echo $_POST["lsquantity"]; ?> dollars on The Last Supper painting(s).<br>
    You have spent $<?php echo $_POST["gquantity"]; ?> dollars on the Guernica painting(s).<br>
    You have spent $ <?php echo $_POST["wlquantity"]; ?> dollars on The Water Lilies painting(s).<br><br>
    The shipping is: <?php echo $_POST["shipping"]; ?> dollars.
    <br><br>

    The total with tax is: $<?php echo ($_POST["bovquantity"] + $_POST["coaquantity"] + $_POST["lsquantity"] + $_POST["gquantity"] + $_POST["wlquantity"] + $_POST["shipping"]) * 1.13; ?>
    <br><br>

    THANK YOU FOR YOUR PURCHASE!
</body>
</html> 
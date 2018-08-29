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


        <form action="finalpurchase.php" method="post">

                The Birth of Venus Quantity
                <br>
                <select name="bovquantity">
                    <option value="0">0</option>
                    <option value="12401600">1</option>
                    <option value="24803200">2</option>
                    <option value="37204800">3</option>
                    <option value="49606400">4</option>
                    <option value="62008000">5</option>
                </select>
            <br><br>

            The Creation of Adam Quantity
            <br>
            <select name="coaquantity">
                <option value="0">0</option>
                <option value="1000000000">1</option>
                <option value="2000000000">2</option>
                <option value="3000000000">3</option>
                <option value="4000000000">4</option>
                <option value="5000000000">5</option>
            </select>
        <br><br>

        The Last Supper Quantity
        <br>
        <select name="lsquantity">
            <option value="0">0</option>
            <option value="23300000">1</option>
            <option value="46600000">2</option>
            <option value="69900000">3</option>
            <option value="93200000">4</option>
            <option value="116500000">5</option>
        </select>
        <br><br>

            Guernica Quantity
            <br>
            <select name="gquantity">
                <option value="0">0</option>
                <option value="23300000">1</option>
                <option value="46600000">2</option>
                <option value="69900000">3</option>
                <option value="93200000">4</option>
                <option value="116500000">5</option>
            </select>                    
        <br><br>

            Water Lilies Quantity
            <br>
            <select name="wlquantity">
                <option value="0">0</option>
                <option value="27000000">1</option>
                <option value="540000000">2</option>
                <option value="81000000">3</option>
                <option value="108000000">4</option>
                <option value="135000000">5</option>
            </select>                    
        <br><br>    

                <input type="radio" name="shipping" value="100000" checked> Same Day Shipping: $100,000 (USD)<br>
                <input type="radio" name="shipping" value="10000"> Shipping Within a Month: $10000 (USD)<br>
                <input type="radio" name="shipping" value="1000"> Shipping Within a Year: $1000 (USD)<br><br> 
                <input type="submit">
    </form>



    </body>
</html>
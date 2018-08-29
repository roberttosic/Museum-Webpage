<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <style>
            #searchBox {
                display: none;
            }
        </style>

        <script>
                $(document).ready(function(){
                    $("button").click(function(){
                      $("#searchBox").css('display', 'block');
                    });
                  });
   
        </script>

        <script>
            function myFunction() {
                document.getElementById("myDIV").style.display = "none";
            }
        </script>

        <link rel="stylesheet" href="maincss.css">
        <script>
                function finishshop() {
                    window.open("shopping.php");
               }
           </script>
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
    </head>

    <body>

        <div class="navigationbar">
                <a class="active" href="main.php">Home</a>
                <a href="#news">About Us</a>
                <a href="#contact">Blogs</a>
                <a><button>Search</button></a>
                <a><img width="20" length="20" align="right" src="shoppingicon.png" onclick="return finishshop();"></a>
                
            </div>
    <table>
    <tr>
    <td style="vertical-align: top;">
            Art Works
            <br>
            <form action="painting.php" method="post">
                <select name="painting">
                    <option value="#"></option>
                    <option value="The Birth of Venus">The Birth of Venus</option>
                    <option value="The Creation of Adam">The Creation of Adam</option>
                    <option value="The Last Supper">The Last Supper</option>
                    <option value="Guernica">Guernica</option>
                    <option value="Water Lilies">Water Lilies</option>
                </select>
                <br>
                <input type="submit">
                <br><br>
            </form>

            Artists
            <br>
            <form action="painter.php" method="post">
                <select name="painter">
                    <option value="#"></option>
                    <option value="Oscar-Claude Monet">Monet</option>
                    <option value="Pablo Picasso">Picasso</option>
                    <option value="Michelangelo di Lodovico Buonarroti Simoni">Michelangelo</option>
                    <option value="Alessandro di Mariano di Vanni Filipepi">Botticelli</option>
                    <option value="Leonardo di ser piero da Vinci">Da Vinci</option>
                </select>
                <br>
                <input type="submit">
                <br><br>
            </form>
            Museums
            <br>
            <form action="museum.php" method="post">
                <select name="museumname">
                <option value="#"></option>
                <option value="The Smithsonian Institution">Smithsonian Institution</option>
                <option value="Le Louvre">Le Louvre</option>
                <option value="The Acropolis Museum">The Acropolis Museum</option>
                <option value="State Hermitage">State Hermitage</option>
                <option value="The British Museum">The British Museum</option>
            </select>
            <br>
            <input type="submit">
                <br><br>
            </form>
        </td> 
        <td align="right" style="vertical-align: top;">       
            <div id="searchBox">
                <form action="main.php"  method="post">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" name="submit">Submit</button>
            </div>
            <div>
                <?php
                    if(isset($_POST["submit"])){
                        $query = $_POST["search"];

                        $sql1 = "SELECT * FROM painting WHERE paintingname LIKE '%{$query}%'";
                        $table = $conn->query($sql1);

                        if ($table->num_rows > 0) {
                         // output data of each row
                            while($row = $table->fetch_assoc()) {
                                $name = $row["paintingname"];
                                $price = $row["price"];
                                $photo = $row["photo"];
                                $date = $row["date"];
                                $type = $row["type"];
                                $location = $row["location"];
                                $artistname = $row["artistname"];
                                $genre = $row["genre"];
                            }
                         }

                        echo"Name: ".($name);
                        echo"<br><br>";
                        echo "Price: <br>";
                        echo ($price);
                        echo"<br><br>";
                        echo "Date of Creation: <br>";
                        echo ($date);
                        echo"<br><br>";
                        echo "Type of Colours: <br>";
                        echo ($type);
                        echo"<br><br>";
                        echo "Current Location of the Painting: <br>";
                        echo ($location);
                        echo"<br><br>";
                        echo "Artist Name: <br>";
                        echo ($artistname);
                        echo"<br><br>";
                        echo "Genre: <br>";
                        echo ($genre);
                    }
                ?>
            </div>
        </td>
        <td>
            <img width="300" length="300" src="<?php echo($photo); ?>">   
        </td>
        </tr>
        </table>

    </body>
</html>
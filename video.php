<html>
<head>
    <meta charset="utf-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
    </head>
    <body>
    <div id="left-banner">
        <h1>Internetowa wypożyczalnia filmów</h1>
        </div>
        <div id="right-banner">
            <table>
            <tr>
            <th><font color="white">Kryminał</font></th>
            <th><font color="white">Horror</font></th>
            <th><font color="white">Przygodowy</font></th>
            </tr>
            <tr>
            <th><font color="white">20</font></th>
            <th><font color="white">30</font></th>
            <th><font color="white">20</font></th>
            </tr>
            </table>
        </div>
        <div id="list-block">
        <h3>Polecamy</h3>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dane3";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Połączenie nieudane: " . mysqli_connect_error());
            }
            $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25)";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<div class='film'>";
                    echo "<h4>" . $row["id"] . ". " . $row["nazwa"] . "</h4>";
                    echo "<img src='" . $row["zdjecie"] . "' alt='film'>";
                    echo "<p>" . $row["opis"] . "</p>";
                    echo "</div>";
                }
            }
            else {
                echo "Brak wyników";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div id="list-block">
        <h3>Filmy Fantastyczne</h3>
                        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dane3";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Połączenie nieudane: " . mysqli_connect_error());
            }
            $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                while($row=mysqli_fetch_assoc($result)) {
                    echo "<div class='film'>";
                    echo "<h4>" . $row["id"] . ". " . $row["nazwa"] . "</h4>";
                    echo "<img src='" . $row["zdjecie"] . "' alt='film'>";
                    echo "<p>" . $row["opis"] . "</p>";
                    echo "</div>";
                }
            }
            else {
                echo "Brak wyników";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div id="footer">
        <p>Stronę wykonał: 0000000000OZ</p>
        </div>
    </body>
</html>
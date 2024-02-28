<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- -------------baner-------------- -->
        <div id="baner">
            <h1>WITAMY W BIURZE PODRÓŻY</h1>
        </div>
        <div id="dane">
            <h3>
                ARCHIWUM WYCIECZEK + skrypt1
            </h3>
    <?php
            $host="localhost";
            $user="root";
            $pw="";
            $db="egzamin4";

            $conn = mysqli_connect($host, $user, $pw, $db);

            if(!$conn) echo "blad polaczenia:" . mysqli_connect_error($conn);

            $sql = "SELECT id, cel, cena FROM wycieczki WHERE dostepna=false;";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo $row["id"] . ". " . $row["cel"] . "cena: " . $row["cena"] . "<br>";
                }
            } else {
                echo "no resultss";
            }

    ?>
        </div>
        <!-- -------------srodek-------------- -->            
        <div id="centrum">
            <div id="lewy">
                <h3>NAJTANIEJ...</h3>
                <table>
                    <tr>
                        <td>
                            Włochy
                        </td>
                        <td>
                            od 1200 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Francja
                        </td>
                        <td>
                            od 1200 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hiszpania
                        </td>
                        <td>
                            od 1200 zł
                        </td>
                    </tr>
                </table>
            </div>

            <div id="srodkowy">
                <h3>TU BYLIŚMY + skrypt2</h3>
               
                <?php
                $sql = "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis DESC;";
                $result = mysqli_query($conn, $sql);
    
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<img src='" . $row["nazwaPliku"] . "' alt='" . $row["podpis"] . "'>";
                    }
                } else {
                    echo "no resultss";
                }
                ?>
            </div>
            <div id="prawy">
                <h3>SKONTAKTUJ SIĘ</h3>
                <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
                <p>telefon: 555666777</p>
            </div>
        </div>
        <!-- -------------stopka-------------- -->

        <div id="stopka">
            <p>Stronę wykonał: 00000000000</p>
        </div>
    </div>
    <?php

    mysqli_close($conn);
    ?>
</body>
</html>
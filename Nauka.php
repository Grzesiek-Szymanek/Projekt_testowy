<?php
    $conn = new mysqli("127.0.0.1","root","","Sprawdziany");
    $result = $conn -> query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row = $result -> fetch_assoc()){
                echo("<tr>");
                    echo("<td>" .$row["id_pracownicy"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["dzial"]. "</td><td>" .$row["zarobki"]. "</td>");
                echo("</tr>"); 
            }
        echo("</table>");
?>

<html>
<head>Headings</head>
<body>
    <?php
        $baris = 4;
        $kolom = 5;
        echo "<table border='1'>";
        for($i=1;$i<=$baris;$i++){
            echo "<tr>";
            for($j=1;$j<=$kolom;$j++){
                $hitung = ($kolom*($i-1))+$j;
                if($hitung%2 == 0){
                    echo "<td style='color:white; background-color:red;'>".$hitung."</td>";
                } else {
                    echo "<td style='color:red; background-color:white;'>".$hitung."</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>
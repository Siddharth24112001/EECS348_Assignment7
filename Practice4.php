<?php
    if (isset($_POST['size'])) {
        $size = $_POST['size'];

        echo "<table border = \"1\" style = 'border-collapse: collapse'>";
        echo "<tr><td></td>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";
        for ($i = 1; $i <= $size; $i++) {
            echo "<tr><td>$i</td>";
            for ($j = 1; $j <= $size; $j++) {
                if ($i == 1 && $j == $size+1) {
                    echo "<td></td>";
                } else {
                    echo "<td>" . ($i * $j) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

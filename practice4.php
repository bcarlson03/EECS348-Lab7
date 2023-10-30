<?php
$number = $_POST["number"];
echo "Multiplication Table up to " . $number. "<br></br>";

echo "<table border='1'>";

echo "<tr>";
for ($i = 0; $i <= $number; $i++)
    {
        echo "<td>" . $i . "</td>";
    }

echo "</tr>";

for ($i = 1; $i <= $number; $i++)
    {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        
        for ($j = 1; $j <= $number; $j++)
        {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
echo "</table>"

?>
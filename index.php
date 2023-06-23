linear<style>
table, th, td{
    border:1px solid black;
}
</style>
<body>

<table style"widht:50%">
<tr>
    <th>perkalian</th>
    <th>hasil</th>
</tr>

<?php
    for($i = 2; $i <=100; $i+=2){
        $val =$i * $i;
        echo "<tr>";
            echo "<td>$i x $i</td>";
            echo "<td>$val</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $ar=[];
    echo "<table border='1',align='center'>";
$sum=0;
    for($i=0;$i<5;$i++){
        echo "<tr>";
            for($j=0;$j<6;$j++){
                echo "<td>",$j+$i,"</td>";
                
            }
    }echo $j;
    echo "</tr>";
    echo "</table>";
   
    echo "</br>";
    
    ?>
</body>
</html>
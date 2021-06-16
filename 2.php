<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method='post'>
<input type="text" name='x'>
<button name='send'>Send</button>

</form>
    <?php

echo "<table border='1'>";


   $arr=array();
   //$value=rand(10,100);
   for ($i = 0; $i <4; $i++) {
    echo "<tr>";
    for ($j = 0; $j <4; $j++) {
       
       echo "<td>",$arr[$i][$j] = rand(10,100),"</td>";
    }
 }
 echo "</tr>";
 echo "</table>";

 echo "</br>";
 
 echo "<table border='1'>";

 echo "<tr>";
 echo "<td>", $arr[0][0],"</td>";
 echo "<td>", $arr[1][1],"</td>";
 echo "<td>", $arr[2][2],"</td>";
 echo "<td>", $arr[3][3],"</td>";
 echo "</tr>";

 echo "<tr>";
 echo "<td>", $arr[0][3],"</td>";
 echo "<td>", $arr[1][2],"</td>";
 echo "<td>", $arr[2][1],"</td>";
 echo "<td>", $arr[3][0],"</td>";
 echo "</tr>";
 echo "</table>";
 $sum=0;
 $namravli=0;
 foreach($arr as $ar){
     echo $ar[0]."</br>";
     echo $ar[1]."</br>";
     echo $ar[2]."</br>";
     echo $ar[3]."</br>";
     
     $sum+=$ar[0]+$ar[1]+$ar[2]+$ar[3];
     $namravli+=$ar[0]*$ar[1]*$ar[2]*$ar[3];

 }
 echo "</br>";
echo "elementebis jami:";
 echo $sum;
 echo "</br>";

 echo "elementebis namravli:";
 echo $namravli;
 echo "</br>";

 if(isset($_POST['send'])){
    if($_POST['x'] % $ar[0] == 0){
        echo $ar[0].":x ricxvis jeradia"."</br>";
        
     }
     elseif($_POST['x'] % $ar[1] == 0){
        echo $ar[1].":x ricxvis jeradia"."</br>";
     }
     elseif($_POST['x'] % $ar[2] == 0){
        echo $ar[2].":x ricxvis jeradia"."</br>";
     }
     elseif($_POST['x'] % $ar[3] == 0){
        echo $ar[3].":x ricxvis jeradia"."</br>";
     }
 }
    ?>
</body>
</html>
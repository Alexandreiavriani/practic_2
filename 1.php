<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method='post'>

<input type="text" name="ar" >
<button name='send'>send</button>
</form>

<?php


echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "<br>";  


$arr = [];
for($i=0;$i<12;$i++){
  array_push($arr,rand(10,100));  
}

//var_dump(array_count_values($arr));
$count=0;
foreach($arr as $a){
  if(isset($_POST['send'])){
    $array=$_POST['ar'];
    if($array<$a){
      echo $a."<br />";
      //$a[11];
      $count++;
       
    }
    
  }
 
  // if($a>50)
  // echo $a."<br />";
 
}
echo "<br>";  
echo $count." "."Elementebi meti x-ricxvze";

echo "<br>"; 
echo "<br>";  

$count_1=0;
foreach($arr as $a){
    if(isset($_POST['send'])){
      $array=$_POST['ar'];
      if($array>$a){
        echo $a."<br />";
        //$a[11];
        $count_1++;
         
      }
      
    }
   
    // if($a>50)
    // echo $a."<br />";
   
  }
  echo "<br>";  
  echo $count_1." "."Elementebi naklebi x-ricxvze";



?>
</body>
</html>
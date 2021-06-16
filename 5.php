<!DOCTYPE html>
<html lang="en">
<head>
<?php
error_reporting(0);

?>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>




    <?php
    if(isset($_POST['submit'])){
        $error_name="";
        $error_mail="";
        $error_website="";
        $error_comment="";
        $error_gender="";

    function myfunc(){
        $name=$_POST['name'];
        $mail=$_POST['e-mail'];
        $website=$_POST['website'];
        $comment=$_POST['comment'];
        $gender=$_POST['gender'];
        
        if(is_numeric($name)|| strlen($name)>50 || strlen($name)<2 || empty($name)){
           $error_name="<p style='color:red;'> *error name field</p>";
            
        }
        if( strlen($mail)>30 || strlen($mail)<2 || empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $error_mail="<p style='color:red;'> *error e-mail field</p>";
             
         }
         if( strlen($website)>30 || strlen($website)<2 || empty($website)){
            $error_website="<p style='color:red;'> *error website field</p>";
             
         }
         if( strlen($comment)>30 || strlen($comment)<2 || empty($comment)){
            $error_comment="<p style='color:red;'> *error comment field</p>";
             
         }
         if( empty($gender)){
            $error_gender="<p style='color:red;'> *You not choose gender</p>";
             
         }
         else { 

         

         
    
    
    ?>


<table border='1' align='center'>

<tr>
<td><h4>Name</h4></td>
<td><h4>Mail</h4></td>
<td><h4>Website</h4></td>
<td><h4>Comment</h4></td>
<td><h4>Gender</h4></td>
</tr>
<tr>
<td><?=$name?></td>
<td><?=$mail?></td>
<td><?=$website?></td>
<td><?=$comment?></td>
<td><?=$gender?></td>

</tr>

    </table>

<?php
    }
}
}
?>

 

<form method='post'><h1>PHP Form Validation Example</h1>

<?=$error_name?>  Name:<input type="text" name='name'>
<br><br>
<?=$error_mail?> E-mail:<input type="text" name='e-mail'>
<br><br>
<?=$error_website?> Website:<input type="text" name='website'>
<br><br>
<?=$error_comment?> Comment:<textarea name="comment" ></textarea>
<br><br>
<?=$error_gender?> Gender:<input type="radio" name='gender'value='Female'>Female
<input type="radio" name='gender' value='Male'>Male
<input type="radio" name='gender' value='Other'>Other
<br><br>
<button name='submit'>Submit</button>
<br><br>
<h1>Your input:</h1>


</form>
<?php echo myfunc()?>

</body>
</html>
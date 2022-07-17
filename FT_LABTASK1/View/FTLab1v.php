<?php

include ("../control/FTLab1c.php");

?>

<html>
<head>
<title>Lab2 - Registatin Form</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="left">Registration Form</h1>
<hr>

<table align="left">

<form action="" method="post" enctype="multipart/form-data">
    
    <tr>
        
    <td>    
    First Name:  
    
    </td> 
    
    <td>
    
    <input type="text" name="fname">
    <?php 
    echo $nameErr; 
    echo $name1Err;
    ?>
    
</td>

</tr>
    <tr>
        <td>    
    Last Name:  
   
    </td> 
    <td>
    <input type="text" name="lname">
    <?php 
    echo $nameErr; 
    echo $name2Err;
    ?>
   
  
    </td>
</tr>
    
<tr>
        
    <td>    
    
    Age:  
 
    </td>
     <td>
    <input type="text" name="age">
    
</td>

</tr>

    <tr>
        
    <td> 
        
    
    Designation:  
    
    </td><td> 
        
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
     
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    
    <input type="radio" name="designation" value="Project Lead"> Project Lead
    

    <?php 
    echo $designationErr; 
    ?>
   
</td>
</tr>

<tr> 
    
<td> 
        
Preferred languages:  


    </td>
    <td>
    
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    
    <input type="checkbox"  name="php" value="PHP"> PHP
    
    <input type="checkbox"  name="c" value="C++"> C++
    
   

    <?php 
    echo $vvv; 
    ?>

</td>

</tr>
    <tr>
        
    <td> 
        Email:  
       
    </td>
    
    <td> 
        <input type="email" name="email">

        <?php 
        echo $emailErr; 
        ?>
      
        
    </td>
</tr>

    <tr>
        
    <td> 
        Password: 
       

    </td>
    
    <td>  
        <input type="text" name="password">
        <?php 
        echo $passwordErr; 
        echo $passwordSave; 
        ?>
        

    </td>

</tr>
    
<tr>
        <td> 
       
        Please choose a file: 
    </td>
    
    <td>  
    
        <input type="file"  name="myfile">
    </td>

</tr>
    <tr> 
        
    <td> 
   
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>




</body>
</html>
<?php
include("../control/process.php");
?>
<head>
    <body>
   
        <h1> Registration Form </h1>
        
        <form action ="" method ="post" enctype ="multipart/form-data">
            <table>
            <tr>
                <td>
         First Name :</td> <td><input type= "text" name ="fname" placeholder =" Enter First Name">   <?php echo $nameErr; ?> <br>
       
</td>
</tr>
<tr>
    <td>
         Last Name : </td><td><input type ="text" name ="lname" placeholder = "Enter Last Name">  <?php echo $name2Err; ?><br>
</td>
</tr>
<tr>
    <td>
    Age :  </td> <td>   <input type ="text" name ="age" placeholder = "Enter Your Age"> <?php echo $AgeErr; ?><br>
</td>
</tr>
<tr>
    <td>

         Designation :</td> <td> <input type = "radio" name = "designation" value ="juniorprogrammer">Junior Programmer
         <input type = "radio" name = "designation" value ="seniorprogrammer">Senior Programmer
         <input type = "radio" name = "designation" value ="projectlead">Project Lead <td> <?php echo $desigErr; ?></td><br><br>
</td>
</tr>
<tr>
<td>
    Preferred Language : </td> <td>         
    <input type="checkbox" name="PreferredLanguage1"  value="java" >JAVA
    <input type="checkbox" name="PreferredLanguage2"  value="php"> PHP
    <input type="checkbox" name="PreferredLanguage2"  value="c++"> C++
    <?php echo $LanErr; ?><br>
 </td>


</tr>
<tr>
    <td>
   Email :</td> <td><input type ="email" name = "email" placeholder = "Enter Your Email" autocomplete ="on"><td> <?php echo $emailErr; ?> </td><br>
 

</td>
</tr>
<tr>
    <td>
         Password :</td> <td><input type ="password" name ="pass" placeholder = "Enter Desired Password"><?php echo $passErr; ?><br>
</td>
</tr>

</table>


<tr>
     <td>
      Please choose a file
               
      <input type="file" name ="myfile"> <br>
      <?php echo $fileErr; ?>
     <br>
    </td>
</tr>
<tr>
    <td>
    <input type ="submit" name="Submit" >
    <input type = "reset">

</td>
</tr>

   

</form>
    
   
    </body>
    </head>

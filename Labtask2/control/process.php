<?php

$first_name=$_REQUEST['fname'];
$last_name=$_REQUEST['lname'];
$pass_word=$_REQUEST['pass'];
$email=$_REQUEST['ename'];
$file=$_REQUEST['file'];




if(is_numeric($first_name))
{
    echo "Please enter valid first name <br>";
}

if (is_numeric($last_name))
{
    echo "Plese enter valid last name<br>";
}



if ((!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))||empty($email)) {
    echo " Invalid Email <br>"; 
}

if(empty($file))
{
    echo "Must add a file<br>";
}

if(isset($_POST['submit']))
{
    
    if(empty($_POST['designation']))
    {
        echo "You must choose one designation<br>";
    }
    
}

if(isset($_POST['language1'])||($_POST['language2'])||($_POST['language3']))
{
    echo " <br>";
}
else 
{
    echo"Preferredlanguage must be selected<br>";
}
if(strlen($pass_word) <= '6')
{
    echo "password Must be more than 6";
}
?>

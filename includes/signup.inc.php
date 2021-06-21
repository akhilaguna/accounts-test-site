<?php
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $username = $_POST['uid'];
 $pwd = $_POST['pwd'];
 $pwd = $_POST['pwdrepeat'];
}
else
{
    header("location: ../signup.php");
}
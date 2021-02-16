<?php
if(isset($_POST['submit']))
{
    $uname = $_POST['name'];
    $umail = $_POST['email'];
    $usub = $_POST['sub'];
    $umsg = $_POST['msg'];  
    $headers = "From: " .$umail;
    
    $to = "www.nikhilplavazhi@gmail.com";

    if(mail($to,$usub,$umsg,$headers))
    {
        echo 'Mail sent Successfully';
    }
    else
    {
        echo 'can not send email';
    }

}


?>
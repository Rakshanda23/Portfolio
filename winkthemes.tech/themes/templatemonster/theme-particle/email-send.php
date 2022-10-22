<?php
// the message
// $msg = "First line of text\nSecond line of text";
if(isset($_REQUEST['send'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $sub=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    // mail("palakn2410@gmail.com",$sub,$message,$email);
    mail("rakshandagiri@gmail.com",$sub,$message,$email);
    echo "done";
}
header("Location:index.html");
//$comments = wordwrap($comments,70);
// send email
?>


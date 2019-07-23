<?php 
if(isset($_POST['submit'])){
    $to = $_POST['hiddenemail']; // this is your Email address
    $from = $_POST['email'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $message =  $_POST['hiddenmessage'];
    $subject = "Form submission";

 $headers = "From:" . $from;

mail($to,$subject,$message,$headers);
// mail($to,$from,$name,$position,$message);
   
    }
?>
<?php 
echo $to 
echo $from 
echo $name
echo $position 
echo $message
echo $subject
echo $headers
?>
<script>  

alert("Message has been sent");
</script>
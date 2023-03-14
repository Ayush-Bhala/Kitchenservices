<?php

$RETURN = array('status' => false);  

$to = "Kitchenservice4u@gmail.com,tushitit@gmail.com";
$subject = "Enquiry Form";

$message = "
<html>
<head>
</head>
<body>
<p>Message Body</p>
<table style='width:60%;border: 1px solid black;border-collapse: collapse;'>
 <tr>
<th style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>Name</th>
 <td style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>".$_POST['name']."</td>
 </tr>
 <tr>
<th style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>Email</th>
 <td style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>".$_POST['email']."</td>
 </tr>
  <tr>
<th style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>Phone Number</th>
 <td style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>".$_POST['number']."</td>
 </tr>
  <tr>
<th style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>Subject</th>
 <td style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>".$_POST['subject']."</td>
 </tr>
  <tr>
<th style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>Message</th>
 <td style='border: 1px solid black;padding: 5px;text-align: left;border-collapse: collapse;'>".$_POST['message']."</td>
 </tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Kitchenservice4u@gmail.com" . "\r\n" ;


mail($to,$subject,$message,$headers);


 $to = $_POST['email'];
$subject = "No-Rply(kitchenservice4u)";

$message = "
<html>
<body>
<p> Dear Sir/Ma'am <br>
Greetings!</p>
<br> 

<p>Thanks for contacting us! We will contact you shortly to book a slot for your service/repairs request. </p>
Warm Regards<br/>
Team kitchenservice4u<br/>
<a href='https://www.kitchenservice4u.com'>www.kitchenservice4u.com</a><br><br><br>
<p>This is system generated email, you are not supposed to reply here. </p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <Kitchenservice4u@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);




$msg='OK';
 $RETURN = array('status' => true , 'msg' => $msg);
 echo json_encode($RETURN);

?>


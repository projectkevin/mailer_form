<?php
$to = $_GET["email"];
$subject = "Hello!";

$message = "
<html>
<head>
   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<style type=\"text/css\" media=\"screen\">
     body{ color: #333;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 13px;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    font-weight: normal;
    line-height: 18px;}
   h1{font-size: 40px;}
</style>
</head>
<body>
<div style=\"width:600px; margin-left: auto; margin-right: auto;\">
Thanks ". $_GET["name"] . " for requesting feedback from our ". $_GET["store"] . " store.<p>
Your device was received by our technicians on ". $_GET["date"] . ". After diagnostics, repair and final testing we released the device from our server center after ". $_GET["days"] . " days.</div>
</body>
</html>";

// More headers
$headers .= 'From: <kevin.d@me.com>' . "\r\n";
$headers .= 'BCC: if@required.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to,$subject,$message,$headers);

echo $message;
?>
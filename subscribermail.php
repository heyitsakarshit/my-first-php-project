<?php
 $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "admin@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe.";

# RESULT PAGE
$location = "index.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $_REQUEST['email'];

# MAIL BODY
$body .= "".$_REQUEST['email']." has been subscribed. \n\n\n Team A.k.Pandey\n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
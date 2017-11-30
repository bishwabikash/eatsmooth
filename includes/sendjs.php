<?php
session_start();

$to      = 'you@example.com';
$subject = 'Order Details: Eatsmooth.com';
$jcitems = $_POST['jcitems'];
$jcitems.="\n\n\n <b>Please Note, This is an automatically Generated Mail. Please mail your query to <a href='mailto:support@eatsmooth.com'>support@eatsmooth.com</a></b>";
$headers = 'From: shop@eatsmooth.com' . "\r\n" .
    'Reply-To: shop@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $jcitems, $headers);
Header('Location: ../thankyou.html');
?>
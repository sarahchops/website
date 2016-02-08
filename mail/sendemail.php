<?php
$msg = $_POST['msg'];
$email = $_POST['email'];

echo ($msg);
echo ($email);

mail('sarah@sarahsargent.net',
htmlspecialchars($_POST['name']),
"{$msg} {$email}");

echo "Thank You!" . " -" . "<a href='sarahsargent.net' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>

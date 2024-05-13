<?php

include __DIR__ . '/Form.php';

$myForm = new Form('#', 'POST');
$myForm->addField('text','username', 'Username');
$myForm->addField('password','password', 'Password');
$myForm->addField('submit', 'submit', '', ['value' => 'Invia']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php echo $myForm->generateForm() ?>   
</body>
</html>


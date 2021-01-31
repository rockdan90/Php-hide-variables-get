<?php 
    $email='rockdan@rd.com';
    $name='rockdan';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>
<body>

    <a href="destino.php?email=<?php echo base64_encode($email)?>&name=<?php echo base64_encode($name)?>">Paso variables</a>
</body>
</html>
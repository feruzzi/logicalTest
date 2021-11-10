<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Loop</title>
</head>

<body>
    <h1>Array Loop</h1>
    <?php
    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eOviz';
    ?>
    <?php
    $i = 1;
    while ($i <= count($aplikasi)) { ?>
        <p><?php echo $aplikasi[$i] ?></p>
    <?php
        $i++;
    }
    ?>



</body>

</html>
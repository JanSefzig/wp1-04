<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$money = 0;

if($money > 100) {
    echo "Můžu jít na kolotoč" ;
} elseif($money > 50 ) {
    echo "Můžu jít na autodrom" ;
} else {
    echo "Počet peněz je: $money = Nemůžu jít nikam" ;
}

?>



    
</body>
</html>
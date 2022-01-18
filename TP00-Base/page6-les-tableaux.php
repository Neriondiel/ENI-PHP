<!-- ! +tab -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
<?php
    $tab = ["pomme","poire","cerise"];
    //var_dump($tab);
    //echo '<pre>';
    //print_r($tab);
?>
<!-- table>thead>tr>th + tab -->
<table>
    <thead>
        <tr>
            <th>Fruits</th>
        </tr>
    </thead>
 <!-- multi cursor CTRL +D    -->
<!-- table>tody>tr>td + tab -->
    <tbody>
        <?php for($i=0;$i<count($tab);$i++){ ?>
        <tr>
                <td><?= $tab[$i] ?></td>
        </tr>
        <?php } // for ?>
    </tbody>
    <!-- table>thead>tr>th^^tody>tr>td     -->
</table>

<h2>Le foreach</h2>

<table>
    <thead>
        <tr>
            <th>Fruits2</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($tab as $fruit){ 
        ?>
        <tr>
            <td><?= $fruit ?></td>
        </tr>
        <?php } // foreach ?>
    </tbody>
</table>

<h2>Le foreach complet</h2>

<table>
    <thead>
        <tr>
            <th>Fruits3</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        //foreach (iterable_expression as $key => $value)
        foreach($tab as $i =>$fruit){ 
        ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $fruit ?></td>
        </tr>
        <?php } // foreach ?>
    </tbody>
</table>
</body>
</html>
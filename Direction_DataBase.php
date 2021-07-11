<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $connection = new mysqli("localhost", "root", "fcit", "control");

        $query = "SELECT `Id`, `Right`, `Left`, `Forward`, `Backward`, `Stop` FROM `base` ORDER BY Id DESC LIMIT 1";
        $result = mysqli_query($connection, $query);
        $dw = mysqli_num_rows($result);

        while ($res = mysqli_fetch_array($result)) {
            echo $res['Right'] . $res['Left'] . $res['Forward'] . $res['Backward'] . $res['Stop'];
        }
        ?>
    </body>
</html>

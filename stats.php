<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>repositorios de software libre</title>
        <link rel="stylesheet" href="/include/css/style.css" type="text/css" />
        <link rel="shortcut icon" href="/favicon.ico" />
    </head>
    <body>
    <?php include './include/header.html' ?>
        <h1>Estad&iacute;sticas de uso</h1>
    <div style="display: inline-block;">
        <table style="margin: 0px auto;">
            <tr>
                <th>Archivo</th>
                <th style="width:30px">Descargas</th>
            </tr>
    <?php
        $command = file_get_contents('/home/carlos/.repoman');
        $output = shell_exec($command);

        $separator = " \n\t";
        $array = array();
        $token = strtok($output, $separator);
        while ($token !== false) {
            $array[] = $token;
            $token = strtok($separator);
        }

        for ($i = 0; $i < count($array); $i+=2) {
            echo '<tr><td class="left">' . $array[$i+1] . '</td><td class="center">' . $array[$i] . '</td>';
        }
    ?>
        </table>
    </div>
    <div id="pie" style="display: inline-block;"></div>
    <div style="clear: both" />
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type='text/javascript'>
        google.load('visualization', '1.0', {packages:['table','corechart']});
        google.setOnLoadCallback(function () {
            var data = new google.visualization.DataTable();

            data.addColumn('string', 'Archivo');
            data.addColumn('number', 'Descargas');

            data.addRows(<?php echo count($array) / 2 ?>);

            <?php for ($i = 0; $i < count($array); $i+=2) { ?>
                data.setCell(<?php echo $i / 2 ?>, <?php echo $i % 2 ?>, '<?php echo $array[$i + 1] ?>');
                data.setCell(<?php echo $i / 2 ?>, <?php echo $i % 2 + 1 ?>, <?php echo $array[$i] ?>, '<?php echo $array[$i] ?>');
            <?php } ?>

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1]);
            var chart = new google.visualization.PieChart(document.getElementById('pie'));
            chart.draw(view, {width:500,height:400,chartArea:{left:10,top:0,width:"100%",height:"100%"},backgroundColor:"#EEEEEE"});
        });
    </script>
    <?php include './include/footer.html' ?>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>WALL-E Kiosk | INNOVUS</title>
    </head>
    <body>
        <?php
        $command = escapeshellcmd('python3 py/rfid/readCard.py'); 
        $output= shell_exec("$command");
        echo $output;
        ?>
    </body>
</html>
<!DOCTYPE>
<html>
    <head>

    </head>
    <body>
        <?php
            $xml=simplexml_load_file("sample.xml") or die("Error: Cannot create object");
            print_r($xml);
        ?>
    </body>
</html>

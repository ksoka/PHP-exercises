<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <h2>Variables</h2>
        <?php
        $fname="Jim";
        echo 'Hello '.$fname;
        ?>
    <h2>Arrays</h2>
        <?php
        $fnames=array('Jim', 'Lisa', 'Ann');
        ?>
        <p><?php print_r($fnames); ?></p>
        <p><?php echo 'First is '.$fnames[0]; ?></p>

        <h2>Assosiative array</h2>
<?php
$assoc_fnames=array('fin'=>'Ruotsi', 'swe'=>'Sverige', 'eng'=>'Sveden');
?>
</p>
<p> <?php echo 'The Finnish name for '.$assoc_fnames['eng'].' is '.$assoc_fnames['fin']; ?> </p>
    </body>
</html>
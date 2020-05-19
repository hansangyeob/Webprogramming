<!--  how to bring code from other file line by line
    $filename = "../week9/form.php";
    $line = file($filename);
    echo "<ol>";
        foreach($line as $i => $line)
            echo "<li> $line </li>";
    echo "</ol>";


-->

<?php
$filename = "../week9/form.php";
$line = file($filename);
echo "<ol>";
$linesOrBigString = '';   
foreach($line as $i => $line)
        $linesOrBigString .= $line;
        echo "<li> $line </li>";
echo "</ol>";


// writing file and creating form.php"
    $filename = "form.php";

    if ($numBytes = file_put_contents($filename,
    $linesOrBigString))
        echo "File Saved, $numBytes written.";
    else 
        echo "File Access Error. Does $filename exist 
        and have 606 permissions?"
?>
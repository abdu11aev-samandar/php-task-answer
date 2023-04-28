<?php
echo $_SERVER['DOCUMENT_ROOT']
?>

<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>

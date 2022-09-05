<?php
session_start();

$v1 = 'apinn';

echo $v1;
$_SESSION['nama'] = $v1;

?>
<br><br>
<a href="file2.php">File 2</a>
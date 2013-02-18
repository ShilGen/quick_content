<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
	<title>Admin-QC</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/admin-qc.css">
	<script type="text/javascript" src="../js/print.js"></script>
</head>
<body><a class="onetab" href="#">Имеющиеся заголовки</a><div>
<?php
$row = 1;
$handle = fopen("../csv/index.csv", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c=$c+2) {
		echo "<a href='qc4.php?file=../csv/".$data[$c] . ".csv&name=".$data[$c+1]."'> ";
        echo $data[$c+1] . "</a><br />\n";
    }
}
fclose($handle);
?>
</div>
<a href='index.php' class="metro">Back</a>
<a HREF="#" class="metro" onClick="printit(); return false;">Print</a>
</body>
</html>

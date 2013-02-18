<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
	<title>Admin-QC</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/admin-qc.css">
	<script type="text/javascript" src="../js/print.js"></script>
</head>
<body><a class="onetab" href="#"><?php echo $_GET["name"]; ?></a><div>
<?php
$row = 1;
$handle = fopen($_GET["file"], "r");
while (($data = fgetcsv($handle, 1000, "&")) !== FALSE) {
    $num = count($data);
    $row++;
    for ($c=0; $c < $num; $c++) {echo $data[$c] . "<br />\n";}
}
fclose($handle);
?>
</div>
<a href='index.php' class="metro">Home</a>
<a href='qc3.php' class="metro">Titles</a>
<a HREF="#" class="metro" onClick="printit(); return false;">Print it</a>
</body>
</html>

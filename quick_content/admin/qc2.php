<?php header('Content-type: text/html; charset=utf-8'); ?>

	<title>Admin-QC</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/admin-qc.css">
	
</head>
<body><a class="onetab" href="#">Результаты</a><div>

<?php
$indexfile = "../csv/index.csv";
$fp = fopen($indexfile, 'a+');
$countlines=count(file($indexfile))+1;
$somecontent = array ( array ( $countlines, $_POST [name]));
foreach ($somecontent as $fields) { fputcsv($fp, $fields);}
 echo " Записали $_POST[name] в файл $indexfile";
 echo "<br>";  
$newfile ="../csv/".$countlines .".csv";
echo $newfile; echo "<br>"; 

echo $_POST[textnf]; echo "<br>"; 
  
 $h = fopen($newfile,"w");

if (fwrite($h,$_POST[textnf]))
echo "<br>Запись произведена успешно";
else
echo "<br>Произошла ошибка при записи данных";
fclose($h);
 
 
?>
</div>
<a href='index.php' class="metro">Back</a>
</body>
</html>

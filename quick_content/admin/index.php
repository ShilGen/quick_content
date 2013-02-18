<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
	<title>Admin-QC</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/admin-qc.css">
	
</head>
<body><a class="onetab" href="#">Admin-QC</a><div>
<?php $indexfile = "../csv/index.csv";
  $lines = count(file($indexfile));
  echo "У нас уже есть $lines строк в";?><a class="dot" href='qc3.php'> <?php echo $indexfile ; ?></a>
 <h2>Форма добавления новой страницы</h2>
Заголовок<br>
 <form action="qc2.php" method="post" name="form1" target="_blank">
<!--Текстовые поля -->       <p><input name="name" type="text" size="80" value=""></p>
  <p>Введите содержимое файла<Br>
   <textarea name="textnf" cols="62" rows="20"></textarea></p>
<!--Кнопка -->               <p><input name="submit" type="submit" value="добавить в <?php echo $indexfile ; ?>">

<input type="reset" value="Очистить"></p>
 </form> 
</div>
</body>
</html>

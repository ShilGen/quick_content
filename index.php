<?php header('Content-type: text/html; charset=utf-8'); ?>
<html>
<head>
	<title>Quick Content (by ShilGen) </title>
	<meta http-equiv="content-type" content="text/html;  />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>
	<script type="text/javascript" src="js/print.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="section vertical">
	<ul class="tabs"><li class="current">
<?php $row = 1; $handle = fopen("csv/index.csv", "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data); $row++;
    for ($c=0; $c < $num; $c=$c+2) {$arr[] = "csv/".$data[$c] . ".csv"; echo $data[$c+1] . "</li><li>";}
	}
fclose($handle);?>
Free plase</li>
	</ul>
<div class="box visible">
<?php foreach ($arr as $v) {$row = 1; $handle = fopen($v, "r"); while (($data = fgetcsv($handle, 1000, "&")) !== FALSE) {$num = count($data); $row++; for ($c=0; $c < $num; $c++) {echo $data[$c] . "<br />\n";}} fclose($handle); echo "</div><div class='box'>";} ?>
 </div>
</div><!-- .section off-->
<div>
<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.ru">
<img alt="Лицензия Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a>
<br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">
"Quick Content" </span><br>
Author: <a xmlns:cc="http://creativecommons.org/ns#" href="http://github.com/ShilGen" property="cc:attributionName" rel="cc:attributionURL">Shilov Gennady</a>
<br>product is licensed: <br>
<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.ru">Creative Commons "Attribution" 3.0</a>.
<br />Direct link: <br>
<a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/ShilGen/quick_content" rel="dct:source">http://github.com/ShilGen/quick_content</a>.
</div>
</body>
</html>

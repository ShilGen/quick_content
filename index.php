<?php header('Content-type: text/html; charset=utf-8'); ?>

<html>
<head>
	<title>Quick_Content Tabs by ShilGen </title>
	<meta http-equiv="content-type" content="text/html;  />
	<link rel="shortcut icon" href="images/favicon.ico" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>
	<script type="text/javascript" src="js/print.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	Search: <input id='searchBox' type='text'></input><span id='time'></span><br>
	<div class="section vertical">
		<ul class="tabs"><li class="current"><!--  part of titles-->
		<?php $row = 1; $handle = fopen("csv/index.csv", "r");
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data); $row++;
			for ($c=0; $c < $num; $c=$c+2) {
				$arr[] = "csv/".$data[$c] . ".csv"; 
				echo $data[$c+1] . "</li><li>";}
			}
		fclose($handle);?>No content</li>
		</ul>
	
	<div class="box visible"><!-- box visible - content part-->
		<?php foreach ($arr as $v) {$row = 1; $handle = fopen($v, "r");
		#echo "Search: <input id='searchBox' type='text'></input><span id='time'></span><br>";
		 while (($data = fgetcsv($handle, 1000, "&")) !== FALSE)
		  {$num = count($data); $row++; 
		  for ($c=0; $c < $num; $c++) {echo "<div class='lined'>".$data[$c] . "</div><br />\n";}} fclose($handle); 
		  echo "</div><div class='box'>";} ?></div>
</div><!-- .section vertical off-->
</body>
</html>

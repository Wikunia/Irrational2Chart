<html>
<head>
	<title>Visualization of an irrational number</title>
	<link rel="stylesheet" href="highlighter/style.css" />
	<link rel="stylesheet" href="highlighter/themes/prism-twilight.css" data-noprefix />
	<script src="highlighter/prefixfree.min.js"></script>
</head>
<body style="background-color:black;">
´
<canvas id="myCanvas" width="730" height="730">
</canvas>
<pre>
	<code class="language-javascript">
	<?php
	$js_file = file('JS/index.js');
	foreach($js_file as $line) {
		if (strlen($line) > 2000) { // irrational numbers
			echo substr($line,0,45).'...\';';
		} else { echo $line; }
	}
	?>
	</code>
</pre>
	
<script type="text/JavaScript" src="JS/index.js"></script>
<script src="highlighter/prism.js" data-default-language="markup"></script>
</body>
</html>
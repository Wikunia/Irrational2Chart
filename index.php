<html>
<head>
	<title>Visualization of an irrational number</title>
	<link rel="stylesheet" href="CSS/styles.css" />
	<link rel="stylesheet" href="highlighter/style.css" />
	<link rel="stylesheet" href="highlighter/themes/prism-twilight.css" data-noprefix />
	<script src="highlighter/prefixfree.min.js"></script>
	<script type="text/javascript" src="JS/filesaver.js"></script>
	<script type="text/javascript" src="JS/canvas-toBlob.js"></script>
</head>
<body style="background-color:black;">
´
<canvas id="irrationalCanvas" width="730" height="730">
</canvas>
<br>
<div class="button" onclick="draw_diagram('pi')">Pi</div>
<div class="button" onclick="draw_diagram('e')">e</div>
<div class="button" onclick="draw_diagram('golden_ratio')">Golden ratio</div>
<div class="button" onclick="draw_diagram('sqrt2')">Sqrt(2)</div>
<br>
<div class="button save" onclick="save()">Save as png</div>

<br><br>
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
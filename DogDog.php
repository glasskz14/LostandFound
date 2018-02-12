<!doctype html>
<html>
<head>
	<title>MY PROJECT</title>
	<script type="text/javascript">
		function btnclick(parameter) {
			var div = document.getElementById('mydiv');
			div.innerHTML ='Y U CLICK DAT BUTTON';
		}
	</script>
</head>
<body>
	<div id="mydiv">Click that!</div>
	<input type="button" id="mybutton" onclick="btnclick()" value="Click me" />
</body>

</html>

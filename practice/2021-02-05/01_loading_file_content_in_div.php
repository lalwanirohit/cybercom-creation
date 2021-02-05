<html lang="en">

<head>
	<title>ajax</title>
	<script type="text/javascript">
		function load(div, file) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(div).innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", file, true);
			xmlhttp.send();
		}
	</script>
</head>

<body>
	<input type="submit" onclick="load('content' , 'include.php' );"> <br><br>
	<div id="content"><small>this content will be changed with file content</small></div>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Refreshing</title>
</head>
<body style="background: gray;">
	
	<input type="button" id="button" value="Load">

	<br><br>
	<div id="content"></div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script type="text/javascript" src="js/script.js"></script> -->
	<script type="text/javascript">
		$('#button').click(function () {
			$('#content').load('pageRefreshing.php');
		});
	</script>
</body>
</html>
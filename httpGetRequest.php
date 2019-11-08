<!DOCTYPE html>
<html>
<head>
	<title>Ajax Refreshing</title>
</head>
<body style="background: gray;">
	
	<p>Username:<input type="text" id="name"></p>
	<p>Message:<textarea id="message"></textarea></p>
	<input type="button" id="button" value="GO">

	<br><br>
	<div id="content"></div>

	<script type="text/javascript" src="js/jquery.js"></script>
	
	<script type="text/javascript">
		$('#button').click(function () {
			var uname=$('#name').val();
			var umsg=$('#message').val();
			
			$.get('httpGetReuestPage.php',{user:uname,msg:umsg},function (data) {
				$('#content').html(data);
			});
		});
	</script>
</body>
</html>
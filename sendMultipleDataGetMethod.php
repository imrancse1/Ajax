<!DOCTYPE html>
<html>
<head>
	<title>Ajax Refreshing</title>
</head>
<body style="background: gray;">
	
	<label for="name">Username: </label>
	<input type="text" id="name" >
	<input type="button" id="button" value="Send">

	<br><br>
	<div id="content"></div>

	<script type="text/javascript" src="js/jquery.js"></script>
	
	<script type="text/javascript">
		$('#button').click(function () {
			var uname=$('#name').val();
			$.ajax({
				type:'GET',
				url:'sendMultipleDataPage.php',
				data:'user='+uname,
				success:function (data) {
					$('#content').html(data);
				}
			});
		});
	</script>
</body>
</html>
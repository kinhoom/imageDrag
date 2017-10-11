<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<style>
		*{
			background-color: yellow;
		}
		div{
			cursor:move;
			position:absolute;
		}
	</style>
	<script src="jquery.js"></script>
</head>
<body>
	<div id="d1">
		<img src="jackson.jpg" width=200 height=200 id='i1'>
	</div>
</body>
<script type="text/javascript">
		function drag(ele){
			ele.bind('mousedown',start);	
			function start(event){
				deltaX=event.clientX-ele.offset().left;
				deltaY=event.clientY-ele.offset().top;
				document.title=deltaX+'|'+deltaY;
				$(document).bind('mousemove',move);
				$(document).bind('mouseup',up);
				 return false;
			}
			function move(event){
				$('#d1').css('left',event.clientX-deltaX+'px').css('top',event.clientY-deltaY+'px');
				return false;
			}
			function up(){
				$(document).unbind('mousedown',start);
				$(document).unbind('mousemove',move);
				$(document).unbind('mouseup',up);
			}
		}
		drag($('#d1'));
</script>
</html>
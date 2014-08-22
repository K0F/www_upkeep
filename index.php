<html>

<style>

body{
	background-image: url('icoDestor3_sm.png');
	background-size: width auto;
}

.frame{
	position: relative;
	width: 400px;
	left: 50%;
	top: 10%;

	background: #FFFCEC;

	border: 3px solid;
	border-color: #2F162B;	
	margin-left: -220px;
	
	padding: 0px 20px 20px 20px;

	-moz-border-radius: 5px;
	border-radius: 5px;
}
</style>
<body>

	<div class="frame">
		<p>
		<?file_get_contents('/msg.txt');?>
		</p>
	</div>

</body>
</html>

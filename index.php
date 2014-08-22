<?
`./fetch.sh`;

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>

<style>

body{
	font-family: Verdana;
	font-size: 12px;
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
	margin-bottom: 10px;
	
	padding: 0px 20px 10px 20px;

	-moz-border-radius: 5px;
	border-radius: 5px;
}
</style>
<body>

		<?
		$src = file_get_contents('www_upkeep/README.md');	 
		
		//if ($fp) { 
 			$array = explode("~", $src); 
		//} 
	
		use \Michelf\MarkdownExtra;
		
		while (list(, $ln) = each($array)){
		
			if($ln!=''){	
			$md = Markdown::defaultTransform($ln);
			$my_html = Markdown::defaultTransform($ln);

			echo '<div class="frame">'.$my_html.'</div>';
			}
		}
?>

</body>
</html>

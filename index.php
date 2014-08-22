<?

#main content
$filename = 'www_upkeep/content.md';

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
	font-family: Tahoma, Verdana, Arial;
        font-size: 10px;
        color: #2F172B;
	background-image: url('https://raw.githubusercontent.com/K0F/www_upkeep/master/background.png');
	background-size: width auto;
}

a:link {
    color: #99aa00;
    text-decoration: none;
}

/* visited link */
a:visited {
    color: #00aa99;
    text-decoration: none;
}

/* mouse over link */
a:hover {
    color: #FFcc00;
}

.content{
	position: relative;
	width: 600px;
	left: 50%;
	top: 10%;

	margin-left: -320px;
	

}

.frame{
	background: #FFFCEC;

        border: 1px solid #2F172B;
        margin-bottom: 10px;
	
	padding: 0px 20px 10px 20px;

	-moz-border-radius: 4px;
	border-radius: 4px;
}

.footer{
      background: #FFFCEC;
      font-size: 9px;
      padding: 2px;
      text-align: right;
      height:#ffffff;
      
      padding: 10px 20px 10px 20px;

      -moz-border-radius: 4px;
      border-radius: 4px;
}
</style>
<body>

<div class="content">

		<?
		$src = file_get_contents($filename);	 
		
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
                <div class="footer">
                <p>
                Page powered by RaspberryPI, GIT and VIM! Kof, <?echo `date +%Y`;?>
                </p> 
                </div>

</div>
</body>
</html>

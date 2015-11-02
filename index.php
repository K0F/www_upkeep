<?

// sys by kof 2015 copyleft

#main content
$filename = './content.md';

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
        font-family: Georgia, New Times Roman, Serif;
        font-size: 12px;
        color: #2F172B;
        background-image: url('background.png');
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
        top: 33%;
        text-align: justify;       
        margin-left: -320px;
        margin-bottom:100px;	

}

img{
  display: block;
  margin-right: auto;
  margin-left: auto;
  overflow: hidden;
}

.frame{
        background: #ffffff;

        border: 1px solid #2F172B;
        margin-bottom: 20px;


      border: 1px solid #2F172B;
      padding: 10px 20px 20px 20px;

      -moz-border-radius: 4px;
      border-radius: 4px;	
}

h1{
    font-family: Tahoma, Sans, Arial;
    font-size: 16px;
    margin-bottom: 32px;
}

h2{
    font-size: 14px;
}

h3{
    font-size: 12px;
}

.footer{
      background: #ffffff;
      font-size: 9px;
      padding: 2px;
      text-align: right;
      height:#ffffff;

      border: 1px solid #2F172B;
      padding: 10px 20px 10px 20px;

      -moz-border-radius: 4px;
      border-radius: 4px;
}

.footer:pre{
    text-align: left;
}

span.date{
  padding-top:12px;
  font-size:8px;
  color: #999999;
  float:right;
}
</style>
<body>

<div class="content">

<?
$src = file_get_contents($filename);	 
$array = explode("~", $src); 

use \Michelf\MarkdownExtra;

while (list(, $ln) = each($array)){

  if($ln!=''){	
    $lines = explode("\n",$ln);
    while (list(, $ll) = each($lines)){
      if(strpos($ll, '#') !== FALSE){
        $d = exec('cd /var/www/ && git blame content.md | grep "'.$ll.'" | awk \'{print $3" "$4}\'');
        break;
      }
    }


    $md = Markdown::defaultTransform($ln);
    $my_html = Markdown::defaultTransform($ln);

    echo '<div class="frame">';
    echo '<span class="date">'.$d.'</span>';
    echo $my_html;
    echo '</div>';
  }
}
?>
                <div class="footer">
                <p>
                Page powered by RaspberryPI, GIT and VIM <br/>
                <a href="https://github.com/K0F/www_upkeep">source</a><br/>
                <a href="mailto:krystof@pesek.me">contact</a><br/><br/>
                last change: <br/>
                <?echo `cd /var/www/ && git log --pretty=format:"%ar" | head -n 1`;?>
                <br/><br/>
                </p>
                </div>

</div>
</body>
</html>

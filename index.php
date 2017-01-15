<?php


/* PREPARE URL CAT ARGUMENT */
if (isset($_GET['cat']) && is_string($_GET['cat']) && $_GET['cat']!="")
{
	$cat = $_GET['cat'];
	
    // everything to lower and no spaces begin or end
    $escape_filepath = strtolower(trim($cat));

    // adding - for spaces and union characters
    $find = array(' ', '&', '\r\n', '\n', '+',',');
    $escape_filepath = str_replace ($find, '-', $escape_filepath);

    //delete and replace rest of special chars
    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');
    $escape_filepath = preg_replace ($find, $repl, $escape_filepath);

	$escape_filepath = escapeshellcmd($escape_filepath);
	$escape_filepath = str_replace ("..", "", $escape_filepath);
	$escape_filepath = str_replace ("/", "", $escape_filepath);
	
	if (file_exists("content/".$escape_filepath))
		$filepath="content/".$escape_filepath;
    else
		$filepath="content";
}
else
{
	$filepath="content";
}


/* PREPARE URL DOC ARGUMENT */
if (isset($_GET['doc']) && is_string($_GET['doc']) && $_GET['doc']!="")
{
	$doc = $_GET['doc'];

    // everything to lower and no spaces begin or end
    $escape_filename = strtolower(trim($doc));

    // adding - for spaces and union characters
    $find = array(' ', '&', '\r\n', '\n', '+',',');
    $escape_filename = str_replace ($find, '-', $escape_filename);

    //delete and replace rest of special chars
    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '-', '');
    $escape_filename = preg_replace ($find, $repl, $escape_filename);

	$escape_filename = escapeshellcmd($escape_filename);
	$escape_filename = str_replace ("..", "", $escape_filename);
	$escape_filename = str_replace ("/", "", $escape_filename);
    $escape_filename = "$escape_filename" . ".md";

	$html = file_get_contents("$filepath/$escape_filename");
}
else
{
    $html = file_get_contents("$filepath/index.md");
}	


/* INSERT HTML HEADER and BODY */
include('html/header.html');
include('html/body.html');


/* PARSE MD FILE AND INSERT GENERATED HTML OUTPUT */
include('php/Parsedown.php');
$Parsedown = new Parsedown();

echo '<article class="markdown-body">';
echo Parsedown::instance()
   ->text($html);
echo '</article>';

/* INSERT HTML FOOTER */
include('html/footer.html');
?>



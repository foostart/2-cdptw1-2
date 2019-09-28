<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('./less/806.less', 'css/806.css');
?>

<!DOCTYPE html>

<html lang="vi">
    <head>
        <title>806</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/806.css">
        <script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/806.js"></script>
    </head>

    <body>
        <?php include $dir_block . '/806-content.php'; ?>
    </body>

</html>

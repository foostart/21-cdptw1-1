<!DOCTYPE html>
<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }       
    $less = new lessc;
    $less->compileFile('less/1930.less', 'css/1930.css');
?>
<html lang="eu">
    <head>
        <title>1930</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/1930.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo $url_path ?>/swiper-5.0.2/package/css/swiper.min.css">
        <script src="swiper-5.0.2/package/js/swiper.min.js"></script>
        <script  src = "js/jquery-3.1.1.min.js"></script>
        <script  src = "js/bootstrap.min.js"></script>

    </head>
    <body>

        <?php include $dir_block.'/1930-content.php'; ?>
        <script src="js/1930.js"></script>
        
    </body>
</html>
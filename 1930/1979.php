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
?>
<html lang="eu" style="background-color: #f3f3f4;">
    <head>
        <title>1979</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-b-9.less', 'css/type-b-9.css');
        ?>
        <link href="<?php echo $url_path ?>/css/type-b-9.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="swiper-4.5.0/dist/css/swiper.min.css">

<html lang="eu" style="background-color: #f3f3f4;">

    </head>

    <body>
        <?php include $dir_block.'/1979-content.php'; ?>
    </body>
    <script src="swiper-4.5.0/dist/js/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

</html>
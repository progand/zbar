<!DOCTYPE html>
<html>

    <head profile="http://gmpg.org/xfn/11">

        <title>Слайдшоу <?php echo $gallery["name"] ?> - Художник Анатолій Збаранський</title>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <META NAME="description"
              http-equiv="description"
              content="Слайдшоу <?php echo $gallery["name"] ?> художника Анатолія Збаранського. Замовити <?php echo $gallery["name"] ?>. Купити <?php echo $gallery["name"] ?>. Переглянути слайдшоу <?php echo $gallery["name"] ?>. Завантажити <?php echo $gallery["name"] ?>. Галерея <?php echo $gallery["name"] ?>. Слайдшоу <?php echo $gallery["name"] ?> художника з Диканьки.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="слайдшоу  <?php echo $gallery["name"] ?>;замовити <?php echo $gallery["name"] ?>;купити <?php echo $gallery["name"] ?>;галерея <?php echo $gallery["name"] ?>;">
        <link rel="stylesheet" href="/css/supersized.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script src="/js/effects.core.js"></script>
        <script src="/js/effects.slide.js"></script>
        <script type="text/javascript" src="/js/esc.js"></script>
        <script type="text/javascript" src="/js/supersized.3.0.js"></script>
        <script type="text/javascript">
            $(function(){
                $.fn.supersized.options = {
                    startwidth: 640,
                    startheight: 480,
                    vertical_center: 1,
					horizontal_center: 1,
                    fit_portrait: 0,
                    fit_always: 0,
                    slideshow: 1,
                    navigation: 1,
                    thumbnail_navigation: 1,
                    transition: 1, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
                    pause_hover: 0,
                    slide_counter: 1,
                    slide_captions: 1,
                    slide_interval: 3000,
                    slides : [
<?php
foreach ($images as $key => $image) {
    $image_url = $image['mediumFile'];
    $image_name = $image['name'];
    echo "{image : '$image_url', title : '$image_name'},";
}
?>
            ]
        };
        $('#supersized').supersized();
    });
        </script>

        <style type="text/css"></style>
    </head>

    <body>

        <!--Loading display while images load-->
        <div id="loading">&nbsp;</div>

        <!--Slides-->
        <div id="supersized"></div>

        <div id="prevthumb"></div>
        <div id="nextthumb"></div>


        <!--Control Bar-->
        <div id="controls-wrapper">
            <div id="controls">

                <!--Slide counter-->
                <div id="slidecounter">
                    <span class="slidenumber"></span>/<span class="totalslides"></span>
                </div>

                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>

                <!--Navigation-->
                <div id="navigation">
                    <img id="prevslide" src="/images/back_dull.png"/><img id="pauseplay" src="/images/pause_dull.png"/><img id="nextslide" src="/images/forward_dull.png"/>
                </div>

                <a href="/gallery/<?php echo $gallery["id"] ?>.html" class="stamp">ВИХІД (ESC)</a>

            </div>
        </div>


    </body>
</html>

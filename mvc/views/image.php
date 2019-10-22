<!DOCTYPE html>
<html>
    <head>
        <title>Картина <?php echo $image['name']; ?> - художник Анатолій Збаранський</title>
        <META NAME="description"
              http-equiv="description"
              content="Картина <?php echo $image['name']; ?> художника Анатолія Збаранського. Збаранський Анатолій Іванович. Замовити <?php echo $image['name']; ?>. Купити <?php echo $image['name']; ?>. Переглянути <?php echo $image['name']; ?>. Завантажити <?php echo $image['name']; ?>. Галерея <?php echo $image['name']; ?>. <?php echo $image['name']; ?> художника з Диканьки.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="Збаранський Анатолій Іванович; картина <?php echo $image['name']; ?>;купити <?php echo $image['name']; ?>;галерея <?php echo $image['name']; ?>;замовити <?php echo $image['name']; ?>;">

        <?php include "commonHead.php"; ?>

    </head>
    <?php include "header.php"; ?>
    <a href="/gallery/<?php echo $gallery['id']; ?>.html" class="backlink">
        <img src="/images/back_arrow.gif" title="Повернутися" alt="Повернутися"/>
        Галерея "<?php echo $gallery['name']; ?>"
    </a>
    <h1><?php echo $image['name']; ?></h1>
    <table>
        <tr>
            <td class="mainimage">
                <img src="<?php echo $image['mediumFile']; ?>" alt="<?php echo $image['name']; ?>"/>
            </td>
            <td class="othergalleryimages">
                <div>З галереї:</div>
                <div class="othergalleryimages" style="position: relative; right: 16px;">
                    <?php foreach ($otherGalleryImages as $key => $otherimage) { ?>
                        <a href="/image/<?php echo $otherimage['id']; ?>.html" class="galleryimage" title="<?php echo $otherimage['name']; ?>">
                            <div><img src="<?php echo $otherimage['smallFile']; ?>" alt=" <?php echo $otherimage['name']; ?>" class="smallimage"/>  </div>
                        </a>
                    <?php } ?>
                </div>
            </td>
        </tr>
    </table>

    <table class="info">

        <tr>
            <td class="title">
                Картина:
            </td>
            <td>
                <?php echo $image['name']; ?>
            </td>
        </tr>

        <tr>
            <td class="title">
                Галерея:
            </td>
            <td>
                <?php echo $gallery['name']; ?>
            </td>
        </tr>

        <?php if ($image['year']) {?>
        <tr>
            <td class="title">
                Рік:
            </td>
            <td>
                <?php echo $image['year']; ?>
            </td>
        </tr>
        <?php } ?>

        <?php if ($image['width'] || $image['height']) {?>
        <tr>
            <td class="title">
                Ширина/висота:
            </td>
            <td>
                <?php echo $image['width']; ?> см / <?php echo $image['height']; ?> см
            </td>
        </tr>
        <?php } ?>

        <?php if ($image['description']) {?>
        <tr>
            <td class="title">
                Опис:
            </td>
            <td>
                <?php echo $image['description']; ?>
            </td>
        </tr>
        <?php } ?>

    </table>
<hr>
<div class="comments" style="padding: 0 16px;">
    <div id="disqus_thread"></div>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<hr>
<div class="otherimages">
  <?php foreach ($otherImages as $key => $image) { ?>
    <a href="/image/<?php echo $image['id']; ?>.html" class="galleryimage" title="<?php echo $image['name']; ?>">
        <img src="<?php echo $image['smallFile']; ?>" alt=" <?php echo $image['name']; ?>" class="smallimage"/>
    </a>
  <?php } ?>
</div>

    <?php include "footer.php"; ?>
    <script type="text/javascript" src="/js/esc.js"></script>
    <script type="text/javascript" src="/js/disquss.js"></script>
</html>

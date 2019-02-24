<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $gallery['name']; ?> - Художник Анатолій Збаранський</title>
        <META NAME="description"
              http-equiv="description"
              content="<?php echo $gallery['name']; ?> художника Анатолія Збаранського. Збаранський Анатолій Іванович. Замовити <?php echo $gallery['name']; ?>. Купити <?php echo $gallery['name']; ?>. Переглянути <?php echo $gallery['name']; ?>. Завантажити <?php echo $gallery['name']; ?>. Галерея <?php echo $gallery['name']; ?>. <?php echo $gallery['name']; ?> художника з Диканьки.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="Збаранський Анатолій Іванович; замовити <?php echo $gallery['name']; ?>;купити <?php echo $gallery['name']; ?>;галерея <?php echo $gallery['name']; ?>;<?php echo $gallery['name']; ?>;">

        <?php include "commonHead.php"; ?>
        <link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />



    </head>
    <?php include "header.php"; ?>
    <h1><?php echo $gallery['name']; ?></h1>
    <table cellspacing=20 align=center class="gallery">
      <tr>
            <?php foreach ($images as $key => $image) { ?>
            <td valign=top>
                <a href="<?php echo $image['mediumFile']; ?>" class="galleryimage" title="<?php echo $image['name']; ?>">
                    <img src="<?php echo $image['smallFile']; ?>" alt=" <?php echo $image['name']; ?>" class="smallimage"/>
                </a>
                <br/>
                <?php echo $image['name']; ?>
                <br/>
                (<a href="/image/<?php echo $image['id']; ?>.html">Детальніше...</a>)
            </td>
            <?php if (($key+1)%4==0){ ?>
      </tr><tr>
            <?php } ?>
          <?php } ?>
      </tr>
    </table>


    <?php include "footer.php"; ?>
    <script type="text/javascript" src="/js/jquery.lightbox-0.5.min.js"></script>
    <script type="text/javascript" src="/js/gallery.js"></script>
</html>

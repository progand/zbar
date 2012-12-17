<!DOCTYPE html>
<html>
    <head>
        <title>{$gallery.name} - Художник Анатолій Збаранський</title>
        <META NAME="description" 
              http-equiv="description" 
              content="{$gallery.name} художника Анатолія Збаранського. Замовити {$gallery.name}. Купити {$gallery.name}. Переглянути {$gallery.name}. Завантажити {$gallery.name}. Галерея {$gallery.name}. {$gallery.name} художника з Диканьки.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="замовити {$gallery.name};купити {$gallery.name};галерея {$gallery.name};{$gallery.name};">

        {include file="commonHead.tpl"}
        <link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" /> 
        
        <script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script> 
        <script type="text/javascript" src="/js/gallery.js"></script>             
	
    </head>
    {include file="header.tpl"}
    <a href="/slideshow/{$gallery.id}.html" class="awesome">Слайдшоу >></a>
    <h1>{$gallery.name}</h1>
    <table cellspacing=20 align=center class="gallery"><tr>
            {foreach from=$images key="key" item="image"}
            <td valign=top>
                <a href="{$image.mediumFile}" class="galleryimage" title="{$image.name}">
                    <img src="{$image.smallFile}" alt=" {$image.name}" class="smallimage"/>  
                </a> 
                <br/>
                {$image.name}
                <br/>
                (<a href="/image/{$image.id}.html">Детальніше...</a>)                
            </td>
            {if ($key+1)%4==0}
        </tr><tr>
            {/if}
            {/foreach}
        </tr></table>


    {include file="footer.tpl"}
</html>
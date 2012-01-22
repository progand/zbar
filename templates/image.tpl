<!DOCTYPE html>
<html>
    <head>
        <title>������� {$image.name} - �������� ������� �����������</title>
        <META NAME="description" 
              http-equiv="description" 
              content="������� {$image.name} ��������� ������� ������������. �������� {$image.name}. ������ {$image.name}. ����������� {$image.name}. ����������� {$image.name}. ������� {$image.name}. {$image.name} ��������� � ��������.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="������� {$image.name};������ {$image.name};������� {$image.name};�������� {$image.name};">

        {include file="commonHead.tpl"}          
        <script type="text/javascript" src="/js/esc.js"></script>
        <script type="text/javascript" src="/js/disquss.js"></script>
    </head>
    {include file="header.tpl"}
    <a href="/gallery/{$gallery.id}.html" class="backlink"><--����������� �� ������ "{$gallery.name}"</a>
    <h1>������� {$image.name}</h1>
    <table>
        <tr>
            <td class="mainimage">
                <img src="{$image.mediumFile}" alt="{$image.name}"/>  
            </td>
            <td class="othergalleryimages">
                <div>� ������:</div>                
                <div class="othergalleryimages">
                    
                {foreach from=$otherGalleryImages key="key" item="image"}           
                <a href="/image/{$image.id}.html" class="galleryimage" title="{$image.name}">
                    <div><img src="{$image.smallFile}" alt=" {$image.name}" class="smallimage"/>  </div>
                </a>                  
                {/foreach}
                </div>
            </td>
        </tr>
    </table>
    
    <table class="info">
        
        <tr>
            <td class="title">
                �������:
            </td>
            <td>
                {$image.name}
            </td>
        </tr>
        
        <tr>
            <td class="title">
                �������:
            </td>
            <td>
                {$gallery.name}
            </td>
        </tr>
        
        <tr>
            <td class="title">
                г�:
            </td>
            <td>
                {$image.year}
            </td>
        </tr>
        
        <tr>
            <td class="title">
                ������/������:
            </td>
            <td>
                {$image.width} �� / {$image.height} ��
            </td>
        </tr>
        
        <tr>
            <td class="title">
                ����:
            </td>
            <td>
                {$image.description}
            </td>
        </tr>
        
    </table>
<hr>
<div class="comments">
    <div id="disqus_thread"></div>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<hr>
<div class="otherimages">
       {foreach from=$otherImages key="key" item="image"}           
                <a href="/image/{$image.id}.html" class="galleryimage" title="{$image.name}">
                    <img src="{$image.smallFile}" alt=" {$image.name}" class="smallimage"/>  
                </a>                  
       {/foreach}  
</div>

    {include file="footer.tpl"}
</html>
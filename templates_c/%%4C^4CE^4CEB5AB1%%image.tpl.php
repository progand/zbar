<?php /* Smarty version 2.6.26, created on 2013-02-14 13:17:06
         compiled from image.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>������� <?php echo $this->_tpl_vars['image']['name']; ?>
 - �������� ������� �����������</title>
        <META NAME="description" 
              http-equiv="description" 
              content="������� <?php echo $this->_tpl_vars['image']['name']; ?>
 ��������� ������� ������������. ����������� ������� ��������. �������� <?php echo $this->_tpl_vars['image']['name']; ?>
. ������ <?php echo $this->_tpl_vars['image']['name']; ?>
. ����������� <?php echo $this->_tpl_vars['image']['name']; ?>
. ����������� <?php echo $this->_tpl_vars['image']['name']; ?>
. ������� <?php echo $this->_tpl_vars['image']['name']; ?>
. <?php echo $this->_tpl_vars['image']['name']; ?>
 ��������� � ��������.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="����������� ������� ��������; ������� <?php echo $this->_tpl_vars['image']['name']; ?>
;������ <?php echo $this->_tpl_vars['image']['name']; ?>
;������� <?php echo $this->_tpl_vars['image']['name']; ?>
;�������� <?php echo $this->_tpl_vars['image']['name']; ?>
;">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "commonHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>          
        <script type="text/javascript" src="/js/esc.js"></script>
        <script type="text/javascript" src="/js/disquss.js"></script>
    </head>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <a href="/gallery/<?php echo $this->_tpl_vars['gallery']['id']; ?>
.html" class="backlink">
        <img src="/images/back_arrow.gif" title="�����������" alt="�����������"/>
        ������� "<?php echo $this->_tpl_vars['gallery']['name']; ?>
"
    </a>
    <h1><?php echo $this->_tpl_vars['image']['name']; ?>
</h1>
    <table>
        <tr>
            <td class="mainimage">
                <img src="<?php echo $this->_tpl_vars['image']['mediumFile']; ?>
" alt="<?php echo $this->_tpl_vars['image']['name']; ?>
"/>  
            </td>
            <td class="othergalleryimages">
                <div>� ������:</div>                
                <div class="othergalleryimages">
                    
                <?php $_from = $this->_tpl_vars['otherGalleryImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['otherimage']):
?>           
                <a href="/image/<?php echo $this->_tpl_vars['otherimage']['id']; ?>
.html" class="galleryimage" title="<?php echo $this->_tpl_vars['otherimage']['name']; ?>
">
                    <div><img src="<?php echo $this->_tpl_vars['otherimage']['smallFile']; ?>
" alt=" <?php echo $this->_tpl_vars['otherimage']['name']; ?>
" class="smallimage"/>  </div>
                </a>                  
                <?php endforeach; endif; unset($_from); ?>
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
                <?php echo $this->_tpl_vars['image']['name']; ?>

            </td>
        </tr>
        
        <tr>
            <td class="title">
                �������:
            </td>
            <td>
                <?php echo $this->_tpl_vars['gallery']['name']; ?>

            </td>
        </tr>
        
        <tr>
            <td class="title">
                г�:
            </td>
            <td>
                <?php echo $this->_tpl_vars['image']['year']; ?>

            </td>
        </tr>
        
        <tr>
            <td class="title">
                ������/������:
            </td>
            <td>
                <?php echo $this->_tpl_vars['image']['width']; ?>
 �� / <?php echo $this->_tpl_vars['image']['height']; ?>
 ��
            </td>
        </tr>
        
        <tr>
            <td class="title">
                ����:
            </td>
            <td>
                <?php echo $this->_tpl_vars['image']['description']; ?>

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
       <?php $_from = $this->_tpl_vars['otherImages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['image']):
?>           
                <a href="/image/<?php echo $this->_tpl_vars['image']['id']; ?>
.html" class="galleryimage" title="<?php echo $this->_tpl_vars['image']['name']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['image']['smallFile']; ?>
" alt=" <?php echo $this->_tpl_vars['image']['name']; ?>
" class="smallimage"/>  
                </a>                  
       <?php endforeach; endif; unset($_from); ?>  
</div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</html>
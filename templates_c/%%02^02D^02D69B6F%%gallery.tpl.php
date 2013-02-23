<?php /* Smarty version 2.6.26, created on 2013-02-14 12:52:37
         compiled from gallery.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->_tpl_vars['gallery']['name']; ?>
 - Художник Анатолій Збаранський</title>
        <META NAME="description" 
              http-equiv="description" 
              content="<?php echo $this->_tpl_vars['gallery']['name']; ?>
 художника Анатолія Збаранського. Збаранський Анатолій Іванович. Замовити <?php echo $this->_tpl_vars['gallery']['name']; ?>
. Купити <?php echo $this->_tpl_vars['gallery']['name']; ?>
. Переглянути <?php echo $this->_tpl_vars['gallery']['name']; ?>
. Завантажити <?php echo $this->_tpl_vars['gallery']['name']; ?>
. Галерея <?php echo $this->_tpl_vars['gallery']['name']; ?>
. <?php echo $this->_tpl_vars['gallery']['name']; ?>
 художника з Диканьки.">

        <META NAME="keywords" HTTP-EQUIV="keywords"
              CONTENT="Збаранський Анатолій Іванович; замовити <?php echo $this->_tpl_vars['gallery']['name']; ?>
;купити <?php echo $this->_tpl_vars['gallery']['name']; ?>
;галерея <?php echo $this->_tpl_vars['gallery']['name']; ?>
;<?php echo $this->_tpl_vars['gallery']['name']; ?>
;">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "commonHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <link href="/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" /> 
        
        <script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script> 
        <script type="text/javascript" src="/js/gallery.js"></script>             
	
    </head>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>   
    <h1><?php echo $this->_tpl_vars['gallery']['name']; ?>
</h1>
    <table cellspacing=20 align=center class="gallery"><tr>
            <?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['image']):
?>
            <td valign=top>
                <a href="<?php echo $this->_tpl_vars['image']['mediumFile']; ?>
" class="galleryimage" title="<?php echo $this->_tpl_vars['image']['name']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['image']['smallFile']; ?>
" alt=" <?php echo $this->_tpl_vars['image']['name']; ?>
" class="smallimage"/>  
                </a> 
                <br/>
                <?php echo $this->_tpl_vars['image']['name']; ?>

                <br/>
                (<a href="/image/<?php echo $this->_tpl_vars['image']['id']; ?>
.html">Детальніше...</a>)                
            </td>
            <?php if (( $this->_tpl_vars['key']+1 ) % 4 == 0): ?>
        </tr><tr>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </tr></table>


    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</html>
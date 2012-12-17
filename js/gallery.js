jQuery(function(){ 
    jQuery("a.galleryimage").lightBox({
        overlayBgColor: '#000',
        overlayOpacity: 0.8,
        imageBtnPrev: '/images/lightbox-btn-prev.png',
        imageBtnNext: '/images/lightbox-btn-next.png',
        imageBtnClose: '/images/lightbox-btn-close.png',
        containerResizeSpeed: 250, 
        txtImage: 'Картина',
        txtOf: 'з'
    });     
}); 
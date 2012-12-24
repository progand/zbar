$(document).ready(function(){
    initSocializer();
});

function initSocializer(){    
    $('#soc_buttons').socializer({
        position: 'right',
        type: 'sliding',
        inittop: 100,
        scrolltop: 10,
        opacity: 0.5
    });
}



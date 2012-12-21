$(document).ready(function(){
    initSocializer()
});

function initSocializer(){    
    $('#soc_buttons').socializer({
        position: 'left',
        type: 'sliding',
        inittop: 20,
        scrolltop: 10,
        opacity: 0.1
    });
}



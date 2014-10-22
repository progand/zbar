$(document).ready(function(){
    SocButtons.initSocializer();
});

SocButtons = new Object();
SocButtons.initSocializer = function(){    
    this.update();
    this.initHidden();
    $('#soc_buttons').socializer({
        position: 'right',
        type: 'sliding',
        inittop: 100,
        scrolltop: 10,
        opacity: 0.5
    });
    $("#close_soc_buttons").click(this.hideSocializer);
};

SocButtons.hideSocializer = function (){
    $('#soc_buttons').fadeOut();
    SocButtons.setHidden(true);
    return false;
};

SocButtons.isStatusHidden = function (){
    return localStorage.getItem('socializer_hidden')=="true";
};

SocButtons.setHidden = function (bool){
    localStorage.setItem('socializer_hidden', bool);
};

SocButtons.initHidden = function (){
    if(!localStorage.getItem('socializer_hidden')){
        localStorage.setItem('socializer_hidden', false);
    }    
};

SocButtons.update = function (){
    if(this.isStatusHidden()){
        $('#soc_buttons').hide();
    }else{
        $('#soc_buttons').show();
    }
};



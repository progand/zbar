document.onkeydown = function(e) {  
    e = e || window.event;  
    if (e.keyCode == 27) { 
        window.history.go(-1);
    }  
    return true;  
}  

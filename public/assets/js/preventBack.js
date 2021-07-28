// alert('loaded');
window.onload = function(){};

if(window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD){
    location.reload();
}






var current = 0;



function slider(){
    console.log("ok");
    let element = document.getElementById('head_slider_content');
    let element2 = 3;
    current++;
    if (current>element2-1){
        current = 0;
        document.getElementById('head_slider_content').style.marginLeft = "0px";
    }
    else{
        document.getElementById('head_slider_content').style.marginLeft = -current*1519+"px";
    }
}
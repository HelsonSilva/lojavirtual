var btnSlide = '1';

function corMenuBanner(e) {

    var lblCor = e;
    btnSlide = lblCor;
    if (lblCor === '1') {
        document.getElementById('lbl-banner' + lblCor).style.border = '2px solid rgb(255, 165, 36)';
    } else {
        document.getElementById('lbl-banner1').style.border = '2px solid rgb(204, 199, 194)';
    }
    var lblCor = e;
    if (lblCor === '2') {
        document.getElementById('lbl-banner' + lblCor).style.border = '2px solid rgb(255, 165, 36)';
    } else {
        document.getElementById('lbl-banner2').style.border = '2px solid rgb(204, 199, 194)';
    }
    var lblCor = e;
    if (lblCor === '3') {
        document.getElementById('lbl-banner' + lblCor).style.border = '2px solid rgb(255, 165, 36)';
    } else {
        document.getElementById('lbl-banner3').style.border = '2px solid rgb(204, 199, 194)';
    }
    var lblCor = e;
    if (lblCor === '4') {
        document.getElementById('lbl-banner' + lblCor).style.border = '2px solid rgb(255, 165, 36)';
    } else {
        document.getElementById('lbl-banner4').style.border = '2px solid rgb(204, 199, 194)';
    }
}

function btnProx() {
    if (btnSlide === '1') {
        slide('2', '1');
    } else {
        if (btnSlide === '2') {
            slide('3', '2');
        } else {
            if(btnSlide === '3'){
                 slide('4', '3');
            }else{
                if(btnSlide === '4'){
                 slide('1', '4');
                }
            }
        }
    }
}

function btnAnt() {
    if (btnSlide === '1') {
        slide('4', '1');
    } else {
        if (btnSlide === '4') {
            slide('3', '4');
        } else {
            if(btnSlide === '3'){
                 slide('2', '3');
            }else{
                if(btnSlide === '2'){
                 slide('1', '2');
                }
            }
        }
    }
}

function slide(s, b) {
    btnSlide = s;
    document.getElementById('r' + s).checked = true;
    document.getElementById('lbl-banner' + s).style.border = '2px solid rgb(255, 165, 36)';
    document.getElementById('lbl-banner' + b).style.border = '2px solid rgb(204, 199, 194)';
}
window.setInterval(function () {
    if (btnSlide === '1') {
        slide('2', '1');
    } else {
        if (btnSlide === '2') {
            slide('3', '2');
        } else {
            if(btnSlide === '3'){
                 slide('4', '3');
            }else{
                if(btnSlide === '4'){
                 slide('1', '4');
                }
            }
        }
    }
    }, 5000);



var elBtnM = document.querySelector('#btn_m');
var elBtnT = document.querySelector('#btn_t');
var elTabM = document.querySelector('#tab_m');
var elTabT = document.querySelector('#tab_t');
if(localStorage.getItem('activebtn')){
    elBtnT.classList.add('active_btn');
    elBtnM.classList.remove('active_btn');
    elTabT.classList.add('active_tab');
    elTabM.classList.remove('active_tab');

}
elBtnM.addEventListener('click',function(){
    elBtnM.classList.add('active_btn');
    elBtnT.classList.remove('active_btn');
    elTabM.classList.add('active_tab');
    elTabT.classList.remove('active_tab');
    localStorage.removeItem('activebtn');
})
elBtnT.addEventListener('click',function(){
    elBtnT.classList.add('active_btn');
    elBtnM.classList.remove('active_btn');
    elTabT.classList.add('active_tab');
    elTabM.classList.remove('active_tab');
    localStorage.setItem('activebtn','active');
})


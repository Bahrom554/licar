var elPayForm = document.querySelector('#payform');
var elPayDriv = document.querySelector('#paydriver');
var elPayTelD = document.querySelector('#paytel_d');
var elPayTotal = document.querySelector('#pay_total');
var elPayCost = document.querySelector('#pay_cost');
var elPayLend = document.querySelector('#pay_l_end');
//deleter
var elDelForm = document.querySelector('#delform');
var elDelDrive = document.querySelector('#deldrive');
//edit
var elEditForm = document.querySelector('#editform');
var elEditDrive = document.querySelector('#editdrive');
var elEditTelD = document.querySelector('#edittel_d');
var elEditOwner = document.querySelector('#editowner');
var elEditTelO = document.querySelector('#edittel_o');
var elEditCar = document.querySelector('#editcar');
var elEditCarNumber = document.querySelector('#editcar_number');
var elEditLstart = document.querySelector('#editl_start');
var elEditLend = document.querySelector('#editl_end');
var elEditTcost = document.querySelector('#edittotal_cost');
var elEditPcost = document.querySelector('#editpaid_cost');

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


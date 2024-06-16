const start3 = 341700;
const price3 = [352.25, 436.19, 266, 251.03, 114, 117.37, 174.68];

const el = (sel, par) => (par||document).querySelector(sel);
var cnt = 0;
const timePause3 = [6600, 4800, 2400, 3600, 3600, 2400, 3600, 6600];
const elVideo = el("#myVideo");
const elPlayVideo = el("#playVideo");
let playTimeout;

const playVideo = () => { 
    clearTimeout(playTimeout);   // Clear any occurring timeouts
    elVideo.play();              // Play video
    elPlayVideo.disabled = true; // Disable click

    playTimeout = setTimeout(() => {
        elVideo.pause();              // Pause video
        elPlayVideo.disabled = false; // Enable button click
        updateFormVisibility();
    }, timePause3[cnt]);              // Wait N milliseconds
    cnt += 1;
    console.log(cnt);
    console.log(timePause3[cnt]);
};


var balanceDisplay = document.getElementById('balanceDisplay');
var balanceValue = document.getElementById('balanceValue');
var changeDisplay = document.getElementById('changeDisplay');
var changeValue = document.getElementById('changeValue');
var resultDisplay = document.getElementById('resultDisplay');
var resultValue = document.getElementById('resultValue');
var prev_balance = start3;
var new_balance = start3;
var diff = 0;
var res = 0;
var amount = 1000;
function showBalance(){
    if (cntvis!=1&& cntvis!=8) {
        let prev = 'q'+(cntvis-1).toString();
        console.log(prev);
        var radioValue = document.querySelector(`input[name='`+prev+`']:checked`).value;
        console.log(radioValue);
        prev_balance = new_balance; 
        if (radioValue=='1') {
            amount += 100;
            new_balance = amount*price3[cntvis-2]; 
        } else if (radioValue=='2') {
            new_balance = amount*price3[cntvis-2];
            amount -= 100;
        } else {
            new_balance = amount*price3[cntvis-2];
        }
    } 
    diff = new_balance - prev_balance;
    res = new_balance-start3;
    console.log('price: '+ price3[cntvis-1].toString() +'\n' + 'prev_balance: '+prev_balance.toString() +'\n' + 'new_balance: '+new_balance.toString())

    balanceDisplay.style.display = 'block'; // Показываем блок с балансом
    balanceValue.textContent = new_balance;

    changeDisplay.style.display = 'block'; // Показываем блок с изменением
    if (diff<0){
        changeValue.style.color='rgb(255, 10, 10)';
        changeValue.textContent = diff.toString();
    } else {
        changeValue.style.color='rgb(10, 255, 30)';
        changeValue.textContent = '+'+diff.toString();
    }

    resultDisplay.style.display = 'block'; // Показываем блок с результатом
    if (res<0){
        resultValue.style.color='rgb(255, 10, 10)';
        resultValue.textContent = res.toString();
    } else {
        resultValue.style.color='rgb(10, 255, 30)';
        resultValue.textContent = '+'+res.toString();
    }
};


var str = "Q";
var cntvis = 1;
// Функция для обновления видимости формы
function updateFormVisibility() {// Получаем текущее количество кликов
    var blockid = str+(cntvis).toString();
    cntvis+=1;
    console.log(blockid);
    var blockContainer = document.getElementById(blockid);
    blockContainer.style.display = 'block';
}

function showSubmit() {
    if (document.getElementById('Q7').style.display=='block') {
        document.getElementById('submitButton').style.display='block';
        console.log('cntfinish'+cnt.toString());
    }
}



elPlayVideo.addEventListener("click", playVideo);
elPlayVideo.addEventListener("click", showBalance);
elPlayVideo.addEventListener("click", showSubmit);
console.log(cnt);
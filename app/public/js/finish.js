var anst1 = [];
var anst2 = 0;
var ansch1 = [];
var ansch2 = [];
var ansch3 = [];
var buych1 = [1, 0, 1, 1, 0, 1, 0, 1, 1];
var buych2 = [1, 0, 0, 1, 1, 0, 0, 1, 1];
var buych3 = [1, 1, 0, 1, 0, 0, 1];
var coeff = [
                [0,4,2],
                [0, 2, 4, 6],
                [0, 2, 4, 6],
                [0, 2],
                [0, 2, 4],
                [0, 2, 4, 6],
                [0, 2, 4, 6],
                [4, 2, 0],
                [6, 4, 2, 0],
                [0, 2, 4, 6],
            ];
var rest1 = 'Рациональный тип';
var result = 'Рациональный тип';

function getdata(){
    fetch('src/actions/get_res.php') // Запрос к PHP-скрипту
    .then(response => response.json()) // Преобразование ответа в JSON
    .then(data => {
        if (data.success) {
            anst1 = [data.q1, data.q2, data.q3, data.q4, data.q5, data.q6, data.q7, data.q8, data.q9, data.q10];
            anst2 = data.anst2; // Выводим результат
            ansch1 = [data.c1q1, data.c1q2, data.c1q3, data.c1q4, data.c1q5, data.c1q6, data.c1q7, data.c1q8, data.c1q9];
            ansch2 = [data.c2q1, data.c2q2, data.c2q3, data.c2q4, data.c2q5, data.c2q6, data.c2q7, data.c2q8, data.c2q9];
            ansch3 = [data.c3q1, data.c3q2, data.c3q3, data.c3q4, data.c3q5, data.c3q6, data.c3q7];
            getdat();
            getres();
        } else {
            alert('Не удалось получить данные.');
        }
    })
    .catch(error => console.error('Ошибка при получении данных:', error));
}

function getdat(){
    console.log('answer: '+anst2.toString());
    console.log(anst1);
    console.log(ansch1);
    console.log(ansch2);
    console.log(ansch3);
}

function getres(){
    var high1 = 0;
    var high2 = 0;
    var high3 = 0;
    var low1 = 0;
    var low2 = 0;
    var low3 = 0;
    var highres = 0;
    var lowres = 0;
    for (let i=0; i<9; i++){
        if (buych1[i]==1 && ansch1[i]==1){
            high1+=1;
        } else if (buych1[i]!=1 && ansch1[i]==2) {
            low1+=1;
        }
        if (buych2[i]==1 && ansch2[i]==1){
            high2+=1;
        } else if (buych2[i]!=1 && ansch2[i]==2) {
            low2+=1;
        }
    }
    for (let i=0; i<7; i++){
        if (buych3[i]==1 && ansch3[i]==1){
            high3+=1;
        } else if (buych3[i]!=1 && ansch3[i]==2) {
            low3+=1;
        }
    }
    console.log('high1: '+high1.toString()+'\n'+'high2: '+high2.toString()+'\n'+'high3: '+high3.toString())

    if (high1>=2) highres+=1; 
    if (high2>=2) highres+=1;
    if (high3>=1) highres+=1;
    if (low1>=1) lowres+=1;
    if (low2>=1) lowres+=1;
    if (low3>=1) lowres+=1;

    if (anst2==1) lowres+=1;
    if (anst2==3) highres+=1;

    if (highres==4 || highres==3) result='Агрессивный тип';
    if (lowres==4 || lowres==3) result='Консервативный тип';
    console.log(result);

    for(let i=0; i<10; i++){
        rest1 += coeff[i][anst1[i]-1];
    }
    if (rest1<=16){
        rest1 = 'Консервативный тип';
    } else if (rest1>=17 && rest1<=34){
        rest1 = 'Рациональный тип';
    } else {
        rest1 = 'Агрессивный тип';
    }
    console.log(rest1);
    showRes();
}

function showRes(){
    document.getElementById('testRes').style.display = 'block';
    document.getElementById('testResValue').textContent = result;
    document.getElementById('gameRes').style.display = 'block';
    document.getElementById('gameResValue').textContent = rest1;
}

document.getElementById('result').addEventListener('click', getdata());
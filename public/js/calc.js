/*-----Калькулятор-----------------------------------------------*/

//----Входное окно и range----------------------

const calcInput=document.getElementById('quan');
const rangeInput=document.getElementById('range');

//-----Чекбоксы и радио--------------------------------------


const promo=document.getElementById('promo');
const bonus=document.getElementById('bonus');
const dost=document.getElementById('dost');

//------Выходное окно----------------------------------

const outp=document.getElementById('stoimost');


//-----Сканируем все inputs-----------------------------
const inputs=document.querySelectorAll('input');

//--Связываем input с range----------------------------------------

calcInput.addEventListener('input', ()=> {
    rangeInput.value=calcInput.value;
    //console.log(calcInput.value);    
})

rangeInput.addEventListener('input', ()=> {
   calcInput.value=rangeInput.value;
}) 

//---Функция расчета стоимости товара-------------------------------
const basePrice=35.75;
const calculate=()=>{
    
    let quan=calcInput.value;
    //console.log(typeof(quan));
    let totalPrice=basePrice*quan;
    //console.log (typeof(totalPrice));

    if (promo.checked) {
        //console.log (typeof(promo.value));
        //console.log (typeof(totalPrice*promo.value));
        totalPrice=(totalPrice-(totalPrice*promo.value));
    }
    
    if (bonus.checked) {
        //console.log (typeof(promo.value));
        //console.log (typeof(totalPrice*promo.value));
        totalPrice=(totalPrice-(totalPrice*bonus.value));
    }

    if (dost.checked) {
        
        totalPrice*=dost.value;
    }

    outp.value=totalPrice.toFixed(2);
    //console.log(typeof(outp.value));

    
    
}

calculate();

for (const input of inputs) {
    //console.log (input);
    input.addEventListener('input', ()=> {
         calculate();
    })
}
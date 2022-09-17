

function changeColor(){

    let text = document.getElementById("text")
    text.style.color = `rgb(${red.value},${green.value},${blue.value})`;
    console.log(KeyboardEvent.repeat);
}


let red = document.getElementById('range_red');
let green = document.getElementById('range_green');
let blue = document.getElementById('range_blue');


red.addEventListener('click',changeColor)
red.addEventListener('keyup',changeColor)

green.addEventListener('click',changeColor)
green.addEventListener('keyup',changeColor)

blue.addEventListener('click',changeColor)
blue.addEventListener('keyup',changeColor)
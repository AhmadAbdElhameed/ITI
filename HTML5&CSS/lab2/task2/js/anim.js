var line = document.getElementById('line');
document.body.addEventListener('load', drawLine());



function drawLine() {
    line.attributes.x2.value = 0;
    line.attributes.y2.value = 0;
    setTimeout(() => {
        line.attributes.x2.value = 50;
        line.attributes.y2.value = 50;
    }, 1000);
    setTimeout(() => {
        line.attributes.x2.value = 100;
        line.attributes.y2.value = 100;
    }, 1500);
    setTimeout(() => {
        line.attributes.x2.value = 150;
        line.attributes.y2.value = 150;
    }, 2000);
    setTimeout(() => {
        line.attributes.x2.value = 200;
        line.attributes.y2.value = 200;
    }, 2500);
    setTimeout(() => {
        line.attributes.x2.value = 250;
        line.attributes.y2.value = 250;
    }, 3000);
    setTimeout(() => {
        line.attributes.x2.value = 300;
        line.attributes.y2.value = 300;
    }, 3500);
    setTimeout(() => {
        line.attributes.x2.value = 350;
        line.attributes.y2.value = 350;
    }, 4000); 
    setTimeout(() => {
        line.attributes.x2.value = 400;
        line.attributes.y2.value = 400;
    }, 4500); 
    setTimeout(() => {
        line.attributes.x2.value = 450;
        line.attributes.y2.value = 450;
    }, 5000);
    setTimeout(() => {
        line.attributes.x2.value = 500;
        line.attributes.y2.value = 500;
    }, 5500);
    setTimeout(() => {
        alert("Animation End");
    }, 5550);

}
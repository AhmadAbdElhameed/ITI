$(function (){
    var time = setInterval(function (){
        $('#images img').first()
        .hide()
        .next()
        .show()
        .end()
        .appendTo("#images");
    },1200);

    $('button').on('click',function(){
        clearInterval(time);
    })
})
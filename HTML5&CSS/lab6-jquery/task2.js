$(document).ready(function() {
    $('.btn-success').click(function() {
        if ($('#text').val().length != 0) {
            var x = $('.container').html();
            var y =
`<div class="alert alert-success alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">Delete</a>

                ` + $('#text').val() + `</div>`;
            $('.container').html(y + x);
            $('#text').val("");
        } else alert("Empty Task, Please enter your task!");
    });
    // When Task is clicked
    $(document).one('click', '.alert', function() {
        
            $(this).css('background-color', 'Blue');
            $(this).css('color','white');
             $(this).append('Done');
            
        
    });
    
   
});
$(document).ready(function(){
    $('#btn').click(function(){
    var content = $('#editor1').val();    
    var folder_name = $('#fol').val();
        $.ajax({
            url: '/log.php',
            method:"POST",
            data: {folder_name: folder_name, content:content},
            success: function(data){
                $('#btn').val(data);
                $('#fol').val('');
                
            }
    });

    })
})

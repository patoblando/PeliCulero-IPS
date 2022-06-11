$(document).ready(function () {
    $( "#reg" ).click();
    
    $("#registro").submit(function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            url: 'guardar.php',
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res == -1)
                    alert('Cliente ya registrado');
                $(':input').val('');
            }
        });
    });
 
});

function traer_info () {
    
    
}


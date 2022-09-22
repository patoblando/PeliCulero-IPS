var data = new FormData(this);
    data.append("quien",quien);
    $.ajax({
         url: 'reclamar.php',
         type: 'POST',
         data: data,
         contentType: false,
         processData: false,
         success: function(res) { 
        }
    });

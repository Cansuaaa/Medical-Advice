$('#myAccountForm').submit(function(e){
    var url = "/ajax/editPassword";
    
    $.ajax({
        type: "POST",
        url: url,
        data: $('#myAccountForm').serialize(),
        dataType: "json",
        success: function(data){
            
                $('#error').html( data.message ).fadeTo(1,1000); 
        }
    });
    e.preventDefault();
});



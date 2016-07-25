$.fn.editable.defaults.mode = 'inline';
$('#myAccountForm').submit(function(e){
    var url = "/ajax/updateMyAccount";
    
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


    $(document).ready(function() {
        $('#email').editable();
    });
    
     $(document).ready(function() {
        $('#firstName').editable();
    });
    
    $(document).ready(function() {
        $('#lastName').editable();
    });
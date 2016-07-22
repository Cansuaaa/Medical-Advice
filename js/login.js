$('#loginForm').submit(function(e){
    var url = "/ajax/login";
    
    $.ajax({
        type: "POST",
        url: url,
        data: $('#loginForm').serialize(),
        dataType: "json",
        success: function(data){
            if( data.error )
            {
                alert("login JS")
                $('#error').html( data.message ).fadeTo(1,1000);
            } else {
                window.location.replace("/myAccount");
            }
        }
    });
    e.preventDefault();
});
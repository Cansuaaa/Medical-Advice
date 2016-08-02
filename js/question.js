 $('#addQuestionForm').submit(function(e){
     tinyMCE.triggerSave();
    var url = "/ajax/addQuestion";
    
    $.ajax({
        type: "POST",
        url: url,
        data: $('#addQuestionForm').serialize(),
        dataType: "json",
        success: function(data){
            
                $('#error').html( data.message ).fadeTo(1,1000); 
        }
    });
    e.preventDefault();
});


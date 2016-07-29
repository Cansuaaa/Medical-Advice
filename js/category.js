 $('#addCategoryForm').submit(function(e){
     //tinyMCE.triggerSave();
    var url = "/ajax/addCategory";
    
    $.ajax({
        type: "POST",
        url: url,
        data: $('#addCategoryForm').serialize(),
        dataType: "json",
        success: function(data){
            
                $('#error').html( data.message ).fadeTo(1,1000); 
        }
    });
    e.preventDefault();
});

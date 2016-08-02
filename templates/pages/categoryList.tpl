{% include "./common/header.tpl" %}
<style>
    .ccolor {
    color:rgb(189, 21, 21);
    }
</style>
<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1 style="background-color: rgb(189, 21, 21);">My question </h1>
                
            </div> 

                

            <div class="col-sm-12 col-md-3 col-lg-4">
                 
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                  
                <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                    <div class="photo-form-wrapper text-center">
                          
                            <table class="table">
                                <tr>
                                   <td>
                                        <a class="ccolor">ID</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Category</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Actions</a>
                                    </td>
                                  
                                </tr>   
                                {% for row in content %}
                                <tr>    
                                    <td>
                                           {{row.id}} 
                                     </td>
                                     <td>    
                                           {{row.category}}
                                    </td>
                                     <td>
                                         <a href="#">Update</a>
                                         <a href="#">Delete</a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </table>
                    
                    </div>            
                     
            
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4">
            </div>
        </div>
    </div>
</section>
                                    
{% include "./common/footer.tpl" %}


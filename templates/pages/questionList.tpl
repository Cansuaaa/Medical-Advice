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
                                        <a class="ccolor">Title</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Author</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Date</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Content</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Category</a>
                                    </td>
                                    <td>
                                        <a class="ccolor">Main picture</a>
                                    </td>
                                </tr>   
                                {% for row in content %}
                                <tr>    
                                    <td>
                                           {{row.id}} 
                                     <td>
                                           {{row.title}}
                                    </td>
                                     <td>
                                           {{row.author_id}}
                                    </td>
                                     <td>
                                           {{row.date}} 
                                    </td>
                                     <td>
                                           {{row.content}} 
                                    </td>
                                     <td>
                                           {{row.category_id}} 
                                    </td>
                                     <td>
                                           {{row.main_picture}} 
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
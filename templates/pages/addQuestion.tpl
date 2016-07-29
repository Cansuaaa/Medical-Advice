{% include "./common/header.tpl" %}
<style>
    .ccolor {
    color:#8A2BE2;
    }
</style>

<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1  style="background-color:#8A2BE2"> Add a question now! </h1>
                
            </div> 

                

            <div class="col-sm-12 col-md-3 col-lg-4">
                 
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                  
                <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                
                    <div class="photo-form-wrapper text-center">
                                
                       
                            <form method="post" id="addQuestionForm"> 
                                <div class="ccolor"> Author: </div>
                                <input disabled class="ccolor" name="author"   placeholder="Author" type="text"  value="{{userEmail}}">
                                  <div class="ccolor"> Title: </div>
                                <input class="ccolor" name="title"     placeholder="Title" type="text" value=""type="text" >
                                 <div class="ccolor"> Content: </div>
                                 <textarea  class="form-control ccolor" id="content" name="content" placeholder="Add your question ..." 
                                           style="width:574px; height:200px; resize:none;"></textarea><br>

                            
                                    <select style="color:#8A2BE2" id="category" name="category">
                                        {% for option in content %}
                                            <option style="color:#8A2BE2" value="{{option.id}}">{{option.category}}</option>
                                        {% endfor %}
                                    </select>
                                  <input id="submit"  class="btn-filled" text="centered" style="background-color:#8A2BE2 ;"  value="Add" type="submit">
                            </form>
                        </div>
                             
                     
            
            </div>

              
            <div class="col-sm-12 col-md-3 col-lg-4">
          </div>  
        </div>
    </div>
</section>
                                   
{% include "./common/footer.tpl" %}
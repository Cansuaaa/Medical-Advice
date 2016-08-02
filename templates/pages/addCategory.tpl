{% include "./common/header.tpl" %}
<style>
    .ccolor {
    color:#DC143C;
    }
</style>

<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1  style="background-color:#DC143C"> Add a category now! </h1>
                
            </div> 

                

            <div class="col-sm-12 col-md-3 col-lg-4">
                 
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                  
                <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                
                    <div class="photo-form-wrapper text-center">
                        <form method="post" id="addCategoryForm"> 
                            <div class="ccolor"> Admin: </div>
                                <input disabled class="ccolor" name="author"   placeholder="Author" type="text"  value="{{adminEmail}}">
                            <div class="ccolor"> Category: </div>
                                <input class="ccolor" name="category"     placeholder="Category" type="text" value=""type="text" >
                                <input id="submit"  class="btn-filled" text="centered" style="background-color:#DC143C ;"  value="Add" type="submit">
                        </form>
                    </div>
            </div>

              
            <div class="col-sm-12 col-md-3 col-lg-4">
          </div>  
        </div>
    </div>
</section>
                                   
{% include "./common/footer.tpl" %}


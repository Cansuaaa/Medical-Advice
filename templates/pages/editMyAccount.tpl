{% include "./common/header.tpl" %}

<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1 style="background-color: orangered;" > Change password! </h1>
                
            </div> 

                

            <div class="col-sm-12 col-md-3 col-lg-4">
                
            </div>
            
                
            <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                        
                <div class="alert alert-danger" id="error" style="display: none" role="alert"></div>
                
                    <div class="photo-form-wrapper text-center">
                        <form id="myAccountForm">   
                            Password: 
                                <input style="background-color:orange" name="password"   placeholder="Password" type="password" value="">
                            New password: 
                                <input style="background-color:orange" name="newPassword"   placeholder="New password" type="password" value="">
                            Confirm Password: 
                                <input style="background-color:orange" name="rePassword" placeholder="Confirm your password" type="password" value="">
                                        <input id="Edit"  class="btn-filled" text="centered" style="background-color: orangered;"  value="Save Changes" type="submit">
                                        
                        </form>
                           
                      
                
                    </div>



            <div class="col-sm-12 col-md-3 col-lg-4">
                
            </div>
                
                
            </div>
        </div>
</section>

{% include "./common/footer.tpl" %}

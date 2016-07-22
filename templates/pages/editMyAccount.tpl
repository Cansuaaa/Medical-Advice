{% include "./common/header.tpl" %}

<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1>My account's details </h1>
                
            </div> 

                

            <div class="col-sm-12 col-md-3 col-lg-4">
                 
            </div>
                    <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                        
                        <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                    <div class="photo-form-wrapper text-center">
                        <form id="myAccountForm">   
                            <table class="table">
                                    <tr>
                                             Email: 
                                        <input style="background-color:orange" name="email"  type="text" value="{{userDetail.email}}" disabled><br></td>
                                    </tr>    
                                            Password: 
                                        <input style="background-color:orange" name="password"   placeholder="Password" type="text" value="">
                                    </tr> 

                                     <tr>
                                            Confirm Password: 
                                            <input style="background-color:orange" name="rePassword" placeholder="Confirm your password" type="text" value="">
                                    </tr> 
                                    
                                     <tr>
                                            First Name: 
                                             <input style="background-color:orange" name="firstName"   placeholder="First name" type="text"  value="{{userDetail.firstName}}">
                                     <tr> 
                                            Last Name:
                                             <input style="background-color:orange" name="lastName"    placeholder="Last name" type="text" value="{{userDetail.lastName}}">
                                    </tr> 
                            </table>
                                        <input id="Edit"  class="btn-filled" text="centered" style="background-color: orangered"  value="Submit" type="submit">
                        </form>
                           
                    </div>     
                
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4">
            </div>
        </div>
    </div>
</section>

{% include "./common/footer.tpl" %}

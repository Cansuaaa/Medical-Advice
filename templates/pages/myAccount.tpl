{% include "./common/header.tpl" %}

<section>
    <div class="main-container" style="background-color: #c0a16b">
        <div class="row">

            <div class="col-sm-12 text-center">
                <h1 style="background-color: rgb(189, 21, 21);">My account's details </h1>
                
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
                                        <input style="background-color:orange" name="email"  type="text" value="{{userDetail.email}}" disabled><br>
                                    </tr>
                                    <tr>
                                             Password: 
                                        <input style="background-color:orange" name="password"  type="text" value="*********" disabled><br>
                                    </tr>
                                    <tr>
                                            First Name: 
                                    <input style="background-color:orange" name="firstName"   placeholder="First name" type="text"  value="{{userDetail.firstName}}" disabled>
                                    </tr>
                                    <tr>
                                            Last Name:
                                             <input style="background-color:orange" name="lastName"    placeholder="Last name" type="text" value="{{userDetail.lastName}}" disabled>
                                    </tr> 
                            </table>
                                   
                                        <a href="/editMyAccount">
                                            <div class="btn" style="background-color: rgb(189, 21, 21);"> Edit </div>
                                        </a>
                                    
                        </form>
                           
                    </div>            
                     
                        
                   <!--     <div class="alert alert-warning" id="error" style="display: none" role="alert"></div>
                        <div class="photo-form-wrapper">
                            <table> 
                            <form id="myAccountForm">

                                     
                                             
                                       
                                            
                                    <input style="background-color:orange" name="email"  type="text" value="{{userDetail.email}}" disabled><br></td>       
                                    <input style="background-color:orange" name="password"   placeholder="Password" type="text" value="">
                                    <input style="background-color:orange" name="rePassword" placeholder="Confirm your password" type="text" value="">
                                    <input style="background-color:orange" name="firstName"   placeholder="First name" type="text"  value="{{userDetail.firstName}}">
                                    <input style="background-color:orange" name="lastName"    placeholder="Last name" type="text" value="{{userDetail.lastName}}">
                                    <input  class="btn-filled" text="centered" style="background-color: orangered"  value="Submit" type="submit">
                                </table>
                            </form>

                    </div> -->

                
            </div>



            <div class="col-sm-12 col-md-3 col-lg-4">
            </div>
        </div>
    </div>
</section>

{% include "./common/footer.tpl" %}

@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('Customer Care') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="#">"{{ translate('Customer Care') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">
    <div class="container text-left">
        <div class="row">
            <div class="col-xxl-11 col-xl-11 col-lg-11 mx-auto">
                <div class="details-div">
                                <div style="background-color: #ffffff;padding:1rem;" class="border-div">
                                    <div class="step-name">Contact the following addresses:</div>
                                        <div class="row">
                                             <div class="col-lg-6">
                                            <div class="contact-info-left-div d-flex mr-auto p-2">
                                                <div class="contact-info-div pt-3">
                                                    <div class="each-contact-info-wrapper">
        
                                                        <h2 class="customer-info-title">Head Office:</h2>
                                                        <p class="customer-info-text">
                                                            Sobkisu Bazar <br/>
                                                            65, Rasul View, Suite-8/A,<br /> 
                                                            Mymensingh Lane, Banglamotor, Dhaka-1000<br />
                                                        </p>
                                                    </div>
                                                    
                                        
                                                    <div class="each-contact-info-wrapper">
                                                        <!--<h2 class="customer-info-title">Customer Care Service: 24/7</h2>-->
                                                         <div class="social-icons mt-3">
        
                                                            <ul class="list-inline my-md-0">
                                                                <li class="list-inline-item">
                                                                    <p>Follow us: </p>
                                                                 </li>
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.facebook.com/sobkisubazar" target="_blank"
                                                                        class="facebook social-icons-hover"><i
                                                                            class="fa-brands fa-facebook-f icon-social-style icon-social-style-f"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.instagram.com/sobkisubazar/" target="_blank"
                                                                        class="instagram"><i class="fa-brands fa-instagram icon-social-style icon-social-style-in"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="https://twitter.com/SobkisuBazar" target="_blank" class="twitter">
                                                                        <i class="fa-brands fa-twitter icon-social-style icon-social-style-t"></i>
                                                                    </a>
                                                                </li>
                                                               
                                                            
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.linkedin.com/company/sobkisubazar//"
                                                                        target="_blank" class="linkedin"><i class="fa-brands fa-linkedin-in icon-social-style icon-social-style-link"></i></a>
                                                                </li>
                                    
                                                                <li class="list-inline-item">
                                                                    <a href="https://www.youtube.com/@sobkisubazar."
                                                                        target="_blank" class="youtube"><i class="fa-brands fa-youtube icon-social-style icon-social-style-y"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                <div class="col-lg-6">
                                    
                                    <div class="contact-info-right-div d-flex mr-auto p-2">
                                        <div class="contact-info-div pt-3">
                                             
                                            <div class="each-contact-info-wrapper">
                                                <h2 class="customer-info-title">Contact with Seller/Merchant Support:</h2>
                                                <a href="mailto: seller@sobkisubazar.com"> seller@sobkisubazar.com</a>
                                            </div>
                                            
                                            
                                        <!--    <div class="contact-info-right-div d-flex mr-auto p-2">-->
                                        <!--<div class="contact-info-div pt-3">-->
                                            <div class="each-contact-info-wrapper">
                                                <h2 class="customer-info-title">Contact with Advertisement Support:</h2>
                                                <a href="mailto: support@sobkisubazar.com"> support@sobkisubazar.com</a>
                                        </div>
                                            
                                            
                                            <div class="each-contact-info-wrapper">
                                                <h2 class="customer-info-title">Contact with Technical Support:</h2>
                                                <a href="mailto: support@sobkisubazar.com"> support@sobkisubazar.com</a>
                                            </div>
                                            
                                            
                                            <div class="each-contact-info-wrapper">
                                                <h2 class="customer-info-title">Contact with Customer Support:</h2>
                                                <a href="mailto:customer@sobkisubazar.com">customer@sobkisubazar.com</a>
                                                <p class="customer-info-text" style="display: none;">Contact us for phone orders, delivery information/delivery updates on your products:/p>
                                            </div>
                                            

                                            <!--<div class="each-contact-info-wrapper" style="display: none;">-->
                                            <!--    <div class="phone-icon">-->
                                            <!--        <img src="https://static.ajkerdeal.com/images/newsite/footer-phone.png" alt="Phone Details" /></div>-->
                                            <!--    <div class="phone-details">-->
                                                    
                                            <!--        <p class="customer-info-text">+8809678800843</p>-->
                                            <!--    </div>-->
                                            <!--</div>
                                        <!--</div>-->
                                    </div>
                                    </div>

                                    </div>
                                    </div>
                                </div>
                                
                                 <div style="background-color: #ffffff;padding:1rem;" class="border-div" id="contactUsEmailDiv">
                                    <div class="step-name my-3">E-mail</div>
                                    <div class="sub-contents">
                                        <span id="SystemMessageLabel"></span>
                                        <span id="InformationLabel"></span>
                                        <div class="row">
                                            <div class="col-lg-6">
                                            <div class="Contact-Us-Inputs-Wrapper d-flex">
                                                <p class="customer-info-text pr-3 mr-lg-2">Reason (Query)</p>
                                                <div class="Contact-Us-TextBox-Wrapper">
                                                    <select name="CallerContactReasonDropDownList" id="CallerContactReasonDropDownList" class="Contact-Us-TextBox">
                                                	<option value="1">Delivery Related Information</option>
                                                	<option value="2">Deal Related Queries</option>
                                                	<option value="3">Sales Service</option>
                                                	<option value="4">Complaint</option>
                                                	<option value="5">Information Regarding Online Payment</option>
                                                	<option value="6">Method of Purchase of Products</option>
                                                	<option value="7">Information Regarding Cash on Delivery</option>
                                                	<option value="8">Registration Procedure</option>
                                                	<option value="9">How to Order by Phone</option>
                                                	<option value="10">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="Contact-Us-Inputs-Wrapper d-flex mt-3 mb-3">
                                                <p class="customer-info-text  pr-lg-5 pr-sm-5 pr-md-4 pr-sm-4 mr-lg-1 mr-sm-size">Description</p>
                                                <div class="Contact-Us-TextBox-Wrapper">
                                                    <textarea name="" cols="20"  class="Contact-Us-TextBox"></textarea>
                                                </div>
                                            </div>
                                  
                                    </div>
                                <div class="col-lg-6">
                                              <div class="Contact-Us-Inputs-Wrapper d-flex">
                                                <p class="customer-info-text pr-3 mr-5">E-mail</p>
                                                <div class="Contact-Us-TextBox-Wrapper">
                                                    <input name="customerEmailTextBox" type="text" id="customerEmailTextBox" class="Contact-Us-TextBox" />
                                                    <input type="hidden" name="customerIdHiddenField" id="customerIdHiddenField" value="0" />
                                                </div>
                                            </div>
                                            <div class="Contact-Us-Inputs-Wrapper d-flex mt-3">
                                            <p class="customer-info-text pr-4 mr-2">Mobile No.*</p>
                                            <span class="required"></span>
                                                <div class="Contact-Us-TextBox-Wrapper">
                                                <input name="customerMobileTextBox" type="text" id="customerMobileTextBox" class="Contact-Us-TextBox" required/>
                                                
                                            </div>
                                        </div>
        
                                        <div class="Contact-Us-Submit" style="padding-right: 160px;margin-top: 20px">
                                            <input type="submit" name="submitButton" value="Submit" onclick="return checkForm();" id="submitButton" class="Contact-Us-Submit-button" />
                                        </div>
                                        
                                 
                                </div>
                                </div>

                               </div>
                            </div>
            </div>
        </div>

      
    </div>
</section>

<style>
    .step-name{
        padding-top: 7px;
        padding-bottom: 7px;
        color: #666;
        background-color: #f2f2f2;
        font-size: 15px;
        text-align: center;
        font-family: 'Roboto', sans-serif;
    }
    .customer-info-title{
        padding: 5px 0;
        margin: 0 0;
        font-size: 14px;
        color: #444;
        font-family: 'Roboto', sans-serif;
    }
    .customer-info-text{
        color: gray;
        margin-bottom: 0;
        padding-top: 3px;
        padding-bottom: 3px;
        font-family: 'Roboto', sans-serif;
        font-size: 12px;
    }
    .contact-info-div a{
        color: gray;
        padding-top: 3px;
        padding-bottom: 3px;
        font-family: 'Roboto', sans-serif;
    }
    
    .Contact-Us-TextBox {
        border: 1px solid #e6e7e9;
        -ms-border-radius: 3px;
        border-radius: 3px;
        padding: 7px 10px;
        font-size: 12px;
        width: 94%;
        resize: none;
    }
    .Contact-Us-TextBox-Wrapper{
        width: 300px;
    }
    
    .Contact-Us-Submit-button {
    background: #572c84  none repeat scroll 0 0;
    border-radius: 3px;
    border-width: 1px 1px 1px;
    border-style: solid;
    border-color: #572c84;
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    padding: 7px 40px;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    float: right;
}

@media only screen and (min-width:768px) and (max-width:1024px){
    .customer-info-text{
        font-size: 9px;
    }
}

@media only screen and (min-width:425px) and (max-width:768px){
    .Contact-Us-TextBox-Wrapper{
        width: 200px;
    }
}

@media only screen and (min-width:425px) and (max-width:575px){
   .Contact-Us-TextBox-Wrapper{
        width: 200px;
    }
    .mr-sm-size{
        margin-right: 30px;
    }
}

@media only screen and (min-width:375px) and (max-width:425px){
    .mr-sm-size{
        margin-right: 30px;
    }
}
@media only screen and (min-width:320px) and (max-width:375px){
    .mr-sm-size{
        margin-right: 30px;
    }
     .Contact-Us-Submit-button {
         float: left;
         margin-left: 80px;
     }
}


    
    
    
    
    
    
</style>

@endsection

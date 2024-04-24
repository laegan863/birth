<!DOCTYPE html>
<html lang="en">

@include('files.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<style type="text/css">
    .text-blue{
        color: #2d5a90;
    }
    #state option{
        /*font-weight: 600;*/
        color: grey;
    }
    #reason_for_apply option{
        color: grey;
    }
    select{
        color: grey;
    }

    body{
        font-family: Roboto,sans-serif;
    }
    .border-secondary{
        border: 1px solid #cacaca !important;
    }
    .active{
        background-color: #dff0d8 !important;
        color: #3c7d43 !important;
        border: 4px solid #dff0d8 !important;
        font-weight: 600;
    }
</style>

<body>

<nav class="container-fluid shadow-sm py-3">
    <img src="{{asset('img/logo.svg')}}" class="img-fluid ps-5">
</nav>
<!-- Hero -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-hero py-4 px-5">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-11">
                    <h1 class="text-center txt-hero fw-bold text-light">
                        Birth Certificate Application Form
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" action="{{route('form.submit.birth.form')}}">
    @csrf
    <input type="" class="form-control" value="{{$type}}" name="type">
    <section class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-5 border-0 shadow">
                    <h4 class="text-blue">State of birth</h4>
                    <label class="h5 text-light-grey">State of birth <b class="text-danger">*</b></label>
                        <select class="form-control border-secondary" id="state" name="select_state">
                            <option value="{{$state}}">{{$state}}</option>
                            @include('files/state-form')
                        </select>
                </div>  
            </div>
            
            <div class="col-lg-8 mt-2">
                <div class="card p-5 border-0 shadow">
                    <h3 class="text-blue">Applicant Details</h3>
                    <label class="text-light-grey">Please enter your information - the person placing this order - as shown on the ID and your contact details.</label>
                    <label class="mt-3 fs-7 text-light-grey">What is your relationship with the person listed on record? <b class="text-danger">*</b> 
                    </label>
                        <select name="relationship" class="form-control border-secondary" required="required">
                            <option selected="selected" value="">Select a Relationship</option>
                            <option value="Self">Myself</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                            <option value="Wife">Wife</option>
                            <option value="Husband">Husband</option>
                            <option value="Domestic Partner">Registered Domestic Partner</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Grandchild">Grandchild</option>
                            <option value="Maternal Grandparent">Maternal Grandparent</option>
                            <option value="Paternal Grandparent">Paternal Grandparent</option>
                            <option value="Legal Guardian">Legal Guardian</option>
                            <option value="Legal Representative">Legal Representative</option>
                            <option value="Court Order">Court Order</option>
                            <option value="Executor Registrant">Power of Attorney / Executor of Estate</option>
                        </select>
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <label class=" fs-7 text-light-grey">First Name <b class="text-danger">*</b> 
                            </label>
                            <input type="text" class="form-control border-secondary" name="firstname">
                        </div>
                        <div class="col-lg-4">
                            <label class=" fs-7 text-light-grey">Middle Name <b class="text-danger">*</b> 
                            </label>
                            <input type="text" class="form-control border-secondary" name="middlename">
                        </div>
                        <div class="col-lg-4">
                            <label class=" fs-7 text-light-grey">Last Name <b class="text-danger">*</b> 
                            </label>
                            <input type="text" class="form-control border-secondary" name="lastname">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-5">
                            <label class=" fs-7 text-light-grey">Phone number <b class="text-danger">*</b> 
                            </label>
                            <input class="form-control" id="phone" type="tel" name="phone" />
                        </div>
                        <div class="col-lg-7">
                            <label class=" fs-7 text-light-grey">Email address <b class="text-danger">*</b> 
                            </label>
                            <input class="form-control" id="email" type="email" name="email">
                        </div>
                        <div class="col-lg-7 mt-4">
                            <label class=" fs-7 text-light-grey">Confirm Email address <b class="text-danger">*</b> 
                            </label>
                            <input class="form-control" id="cemail" type="email">
                        </div>
                    </div>
                    <hr class="col-12 my-5">
                    <div class="col-12">
                        <h3 class="text-blue">Delivery information</h3>
                        <label class="text-light-grey">Please enter the physical address where you want the certificate to be delivered.</label>
                            
                        <div class="row ">
                            <div class="col-lg-12 my-3">
                                <label class=" fs-7 text-light-grey">Address 1 (Street number and street name) <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control"  name="address_1">
                            </div>
                            <div class="col-lg-12 my-3">
                                <label class=" fs-7 text-light-grey">Address 2 (Street number and street name) <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="address_2">
                            </div>
                            <div class="col-lg-6 my-3">
                                <label class=" fs-7 text-light-grey">City <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="city">
                            </div>
                            <div class="col-lg-6 my-3">
                                <label class=" fs-7 text-light-grey">State <b class="text-danger">*</b> 
                                </label>
                                <select class="form-control" name="state">
                                    <option value=""></option>
                                    @include('files/state-form')
                                </select>
                            </div>
                            <div class="col-lg-6 my-3">
                                <label class=" fs-7 text-light-grey">Zip Code <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="zip_code">
                            </div>
                            <div class="col-lg-12 my-3">
                                <div class="form-check">
                                  <input class="form-check-input rounded-0" id="shipping_address_is_po" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label text-light-grey fs-6" for="flexCheckDefault">
                                    My Shipping Address Is a P.O Box.
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>
            <div class="col-lg-8 mt-4">
                <div class="card p-5 border-0 shadow">
                    <div class="col-12">
                        <h3 class="text-blue">Person on record</h3>
                        <label class="text-light-grey">Please enter Full name at birth of the person on record as shown on the Birth Certificate.</label>                       
                        <div class="row">
                            <div class="col-lg-3 my-3">
                                <label class=" fs-7 text-light-grey">First Name <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control"  name="record_fname">
                            </div>
                            
                            <div class="col-lg-3 my-3">
                                <label class=" fs-7 text-light-grey">Middle name <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="record_mname">
                            </div>
                            <div class="col-lg-3 my-3">
                                <label class=" fs-7 text-light-grey">Last name<b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="record_lname">
                            </div>
                            <div class="col-lg-3 my-3">
                                <label class=" fs-7 text-light-grey">Suffix<b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="record_suffix">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="fs-7 text-light-grey">
                                    Sex <b class="text-danger">*</b>
                                </label>
                                <div class="row">
                                    <div class="col-6 mt-2">
                                        <div class="border border-1 p-1 rounded-2">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="sex" value="Male" checked>
                                              <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="border border-1 p-1 rounded-2">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="sex" value="Female">
                                              <label class="form-check-label" for="flexRadioDefault2">
                                                Female
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-lg-2 mt-3">
                                <label class="fs-7 text-light-grey">
                                    City Of Birth <b class="text-danger">*</b>
                                </label>
                                <select class="form-control" name="city_of_birth">
                                    @include('files/city')
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="cant_find_my_city" id="target_city">
                                  <label class="form-check-label text-light-grey" id="cant_find_city" for="target_city">
                                    I cannot Find My City
                                  </label>
                                </div>
                            </div>
                            <div class="mt-4 d-none" id="targeted_city">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label class="fs-7 text-light-grey">
                                            Zip Code <b class="text-danger">*</b>
                                        </label>
                                        <input value=" " type="text" class="form-control" name="city_zip_code">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="fs-7 text-light-grey">
                                            City <b class="text-danger">*</b>
                                        </label>
                                        <input value=" " type="text" class="form-control" name="city_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label class="fs-7 text-light-grey">
                                        Month <b class="text-danger">*</b>
                                    </label>
                                    <select class="form-control" name="attr_month">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>

                                </div>
                                <div class="col-lg-3">
                                    <label class="fs-7 text-light-grey">
                                        Day <b class="text-danger">*</b>
                                    </label>
                                        <select class="form-control col-12" name="attr_day">
                                            @for($c = 1; $c<=31; ++$c)
                                                <option value="{{$c}}">{{$c}}</option>
                                            @endfor
                                        </select>
                                    
                                </div>
                                <div class="col-lg-3">
                                    <label class="fs-7 text-light-grey">
                                        Year <b class="text-danger">*</b>
                                    </label>
                                        <select class="form-control" name="attr_year">
                                            @for($b = 2030; $b>=1906; --$b)
                                                <option value="{{$b}}">{{$b}}</option>
                                            @endfor
                                        </select>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="col-12 my-5">
                    <div class="col-12">
                        <h3 class="text-blue">Parents of the person on record</h3>
                        <label class="text-light-grey">Please enter the Mother/Father/Parent’s full name as shown on Birth Certificate of the person on record.</label>
                        <h5 class="text-blue mt-4">Mother/Parent’s full name</h5>
                            
                        <div class="row">
                            <div class="col-lg-4 my-3">
                                <label class=" fs-7 text-light-grey">First Name <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control"  name="parent_fname">
                            </div>
                            
                            <div class="col-lg-3 my-3">
                                <label class=" fs-7 text-light-grey">Middle name <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="parent_mname">
                            </div>
                            <div class="col-lg-5 my-3">
                                <label class=" fs-7 text-light-grey">Last name before any marriage <b class="text-danger">*</b> 
                                </label>
                                <input type="text" class="form-control border-secondary" name="parent_lname">
                            </div>
                            <div class="col-lg-12 my-3">
                                <div class="form-check">
                                  <input class="form-check-input rounded-0" id="target_id_parentlisted" type="checkbox" id="flexCheckDefault" name="one_parent_listed">
                                  <label class="form-check-label text-light-grey fs-6" for="flexCheckDefault">
                                    Only One Parent is Listed
                                  </label>
                                </div>
                            </div>
                            <div class="col-lg-12 my-3" id="parent_listed">
                                <div class="row">
                                    <div class="col-lg-3 my-3">
                                        <label class=" fs-7 text-light-grey">First Name <b class="text-danger">*</b> 
                                        </label>
                                        <input value=" " type="text" class="form-control"  name="parent_listed_fname">
                                    </div>
                                    
                                    <div class="col-lg-3 my-3">
                                        <label class=" fs-7 text-light-grey">Middle name <b class="text-danger">*</b> 
                                        </label>
                                        <input value=" " type="text" class="form-control border-secondary" name="parent_listed_mname">
                                    </div>
                                    <div class="col-lg-3 my-3">
                                        <label class=" fs-7 text-light-grey">Last name<b class="text-danger">*</b> 
                                        </label>
                                        <input value=" " type="text" class="form-control border-secondary" name="parent_listed_lname">
                                    </div>
                                    <div class="col-lg-3 my-3">
                                        <label class=" fs-7 text-light-grey">Suffix<b class="text-danger">*</b> 
                                        </label>
                                        <input value=" " type="text" class="form-control border-secondary" name="parent_listed_suffix">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-4">
                <div class="card p-5 border-0 shadow">
                    <h4 class="text-blue">Certificate information</h4>
                    <div class="col-12">
                        <label class="text-light-grey">Why are you applying for a birth certificate? <b class="text-danger">*</b></label>
                        <select name="birth_certificate_applying" id="reason_for_apply" class="form-control">
                            <option selected="selected" value="">Select a reason</option>
                            <option value="Passport">Passport</option>
                            <option value="Social Security">Social Security</option>
                            <option value="Retirement">Retirement</option>
                            <option value="Employment">Employment</option>
                            <option value="Working Papers">Working Papers</option>
                            <option value="School entrance">School entrance</option>
                            <option value="Drivers license">Driver's license</option>
                            <option value="Marriage license">Marriage license</option>
                            <option value="Welfare assistance">Welfare assistance</option>
                            <option value="Veterans benefits">Veterans benefits</option>
                            <option value="Court proceeding">Court proceeding</option>
                            <option value="Entrance into Armed Forces">Entrance into Armed Forces</option>
                            <option value="International Use">International Use</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Genealogy">Genealogy</option>
                            <option value="other">Other (specify)</option>
                        </select>
                    </div>
                    <div class="col-12 mt-4">
                        <label class="text-light-grey">Number of Certified Copies needed <b class="text-danger">*</b></label>
                        <select class="form-control" name="no_of_copy">
                            @for($a = 1; $a<=9; $a++)
                                <option value="{{$a}}">{{$a}}</option>
                            @endfor
                        </select>
                    </div>
                </div>  
            </div>
            <div class="col-lg-8 d-flex justify-content-end my-5">
                <button id="submit" type="submit" class="btn bg-light-blue1 text-light fw-semibold rounded-0">
                    Submit Application
                </button>
            </div>
        </div>
    </section>
</form>

@include('files.script')
<script type="text/javascript">
    $(document).ready(function(){
        var target_id = $("#target_id_parentlisted");
        target_id.change(function(){
            if(target_id.prop("checked")){
                $("#parent_listed").removeClass("d-block").addClass("d-none");
            } else {
                $("#parent_listed").removeClass("d-none").addClass("d-block");
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var target_id = $("#target_city");
        target_id.change(function(){
            if(target_id.prop("checked")){
                $("#targeted_city").removeClass("d-none").addClass("d-block");
            } else {
                $("#targeted_city").removeClass("d-block").addClass("d-none");
            }
        });
    });
</script>


<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
 <script type="text/javascript">
     $(document).ready(function(){
        var email = $("#email");
        var verify = $("#cemail");
        var verified = $("#verified");
        let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        function checkEmail() {
            if (email.val() && verify.val()) {
                if (email.val() === verify.val()) {
                    verify.removeClass('inactive').addClass('active');
                } else {
                    verify.removeClass('active').addClass('inactive');
                }
            } else {
                verify.removeClass('active').addClass('inactive');
            }
        }

        verify.change(checkEmail);
        email.change(checkEmail);
    });

 </script>
 @include('files/footer')
</body>
</html>

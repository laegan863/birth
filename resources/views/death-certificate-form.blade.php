@include('files.head')

    <title>Home</title>
</head>
<body>
    
@include('files.navbar')

    <!-- Hero -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-hero p-5">

                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-11">
                        <h1 class="text-center txt-hero text-white fw-bold">
                            Death Certificate Application Form

                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </h1>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <form action="{{ route('death.form_store', ['type' => $type]) }}" method="post">
        @csrf

        <!-- Info of the Decedent -->
        <div class="container p-xxl-5 p-xl-5 p-lg-5 p-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Information of the decedent
                    </p>

                    <p class="fw-semibold text-light-grey mb-3">
                        Complete the following information regarding the details of the deceased person on record.
                    </p>

                    <div class="mb-3">
                        <p class="fw-semibold text-light-grey h6 mb-2">
                            Decedent's State of Death <span class="text-danger">*</span>
                        </p>
        
                        <select name="decedent_state_of_death" class="form-select text-light-grey bg-body-tertiary rounded-1 fw-semibold">
                            <option selected></option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <p class="fw-semibold text-light-grey h6 mb-2">
                            Decedent's State of Birth
                        </p>
        
                        <select name="decedent_birthstate_of_death" class="form-select text-light-grey bg-body-tertiary rounded-1 fw-semibold">
                            <option selected></option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="city-town-death" class="form-label text-light-grey fw-semibold h6">Decedent's City/Town of Death <span class="text-danger">*</span></label>
                        <input type="text" name="city_town_of_death" id="city-town-death" class="form-control bg-body-tertiary text-light-grey fw-semibold">
        
                    </div>

                    <div class="mb-3">
                        <label for="country-death" class="form-label text-light-grey fw-semibold h6">Decedent's County of Death</label>
                        <input type="text" name="country_of_death" id="country-death" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>
                    
                    <div class="row mb-3">
                        
                        <p class="h6 fw-semibold text-light-grey">
                            Decedent's Date of Birth
                        </p>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Month of Death 
                                    <span class="text-danger">
                                        *
                                    </span>
                            </p>
                            <select name="month_of_death" class="form-select text-light-grey bg-body-tertiary rounded-1 fw-semibold" aria-label="Select Month">
                                <option selected></option>
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

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Day of Death 
                                    <span class="text-danger">
                                        *
                                    </span>
                            </p>
                            <select name="day_of_death" class="form-select bg-body-tertiary text-light-grey fw-semibold" aria-label="Select Day of the Month">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Year of Death 
                                <span class="text-danger">
                                    *
                                </span>
                            </p>
                            <select name="year_of_death" class="form-select bg-body-tertiary text-light-grey rounded-1 fw-semibold" id="year-of-death" aria-label="Select Year">
                                <option selected value=""></option>
                            </select>
                        </div>
                        
                        
                    </div>

                    <div class="row mb-3">
                        
                        <p class="h6 fw-semibold text-light-grey">
                            Decedent's Date of Birth
                        </p>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Month of Birth   
                                    <span class="text-danger">
                                        *
                                    </span>
                            </p>
                            <select name="month_of_birth" class="form-select text-light-grey bg-body-tertiary rounded-1 fw-semibold" aria-label="Select Month">
                                <option selected></option>
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

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Day of Birth 
                                    <span class="text-danger">
                                        *
                                    </span>
                            </p>
                            <select name="day_of_birth" class="form-select bg-body-tertiary text-light-grey fw-semibold" aria-label="Select Day of the Month">
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-12">
                            <p for="city-town-death" class="form-label text-light-grey fw-semibold h6">
                                Year of Birth 
                                <span class="text-danger">
                                    *
                                </span>
                            </p>
                            <select name="year_of_birth" class="form-select bg-body-tertiary rounded-1 fw-semibold text-light-grey" id="year-of-birth" aria-label="Select Year">
                                <option selected value=""></option>
                            </select>
                        </div>
                        
                        
                    </div>

                    <div class="mb-3">
                        <label for="social-security-number" class="form-label text-light-grey fw-semibold h6">Decedent's Social Security number if known</label>
                        <input type="text" name="ssn" id="social-security-number" class="form-control bg-body-tertiary text-light-grey fw-semibold">
        
                    </div>

                </div>
            </div>
        </div>

        <!-- Personal Info of the Decedent -->
        <div class="container px-xxl-5 px-xl-5 px-lg-5 px-3 pb-xxl-5 pb-xl-5 pb-lg-5 pb-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Decedent's Personal Information
                    </p>

                    <p class="fw-semibold text-light-grey mb-3">
                        Please enter the full name of the person on record at time of death as shown on the Death Certificate.
                    </p>

                    <div class="row mb-3">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_firstname" class="form-label text-light-grey fw-semibold h6">
                                Decedent's First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input name="first_name" type="text" id="decedent_firstname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_middlename" class="form-label text-light-grey fw-semibold h6">
                                Decedent's Middle Name
                                <span class="text-danger">*</span>
                            </label>
                            <input name="middle_name" type="text" id="decedent_middlename" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_lastname" class="form-label text-light-grey fw-semibold h6">
                                Decedent's Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input name="last_name" type="text" id="decedent_lastname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-4 mt-3">
                            <p class="fw-semibold text-light-grey h6 mb-2">
                                Decedent’s Sex  <span class="text-danger">*</span>
                            </p>
                            
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 bg-body-tertiary border border-1 border-light-subtle mx-2 rounded-1">
                                    <div class="form-check form-check-inline py-1 px-3">
                                        <input class="form-check-input" type="radio" id="decedent_male" name="decedent_gender" value="Male">
                                        <label class="form-check-label text-light-grey fw-semibold" for="decedent_male">Male</label>
                                    </div>
                                </div>

                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-12 bg-body-tertiary border border-light-subtle border-1 mx-2 rounded-1">
                                    <div class="form-check form-check-inline py-1 px-3">
                                        <input class="form-check-input" type="radio" id="decedent_female" name="decedent_gender" value="Female">
                                        <label class="form-check-label text-light-grey fw-semibold" for="decedent_female">Female</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- Decedent's Mother / Parent -->
        <div class="container px-xxl-5 px-xl-5 px-lg-5 px-3 pb-xxl-5 pb-xl-5 pb-lg-5 pb-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Full Name of Decedent's Mother / Parent
                    </p>

                    <div class="row mb-3">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_mother_firstname" class="form-label text-light-grey fw-semibold h6">
                                First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_mother_firstname" id="decedent_mother_firstname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_mother_middlename" class="form-label text-light-grey fw-semibold h6">
                                Middle Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_mother_middlename" id="decedent_mother_middlename" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_mother_lastname" class="form-label text-light-grey fw-semibold h6">
                                Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_mother_lastname" id="decedent_mother_lastname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- Decedent's Father / Parent -->
        <div class="container px-xxl-5 px-xl-5 px-lg-5 px-3 pb-xxl-5 pb-xl-5 pb-lg-5 pb-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Full Name of Decedent's Father / Parent
                    </p>

                    <div class="row mb-3">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_father_firstname" class="form-label text-light-grey fw-semibold h6">
                                First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_father_firstname" id="decedent_father_firstname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_father_middlename" class="form-label text-light-grey fw-semibold h6">
                                Middle Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_father_middlename" id="decedent_father_middlename" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="decedent_father_lastname" class="form-label text-light-grey fw-semibold h6">
                                Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="decedent_father_lastname" id="decedent_father_lastname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="container px-xxl-5 px-xl-5 px-lg-5 px-3 pb-xxl-5 pb-xl-5 pb-lg-5 pb-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Contact Information
                    </p>

                    <p class="fw-semibold text-light-grey mb-3">
                        Please enter your full name as shown on your ID and your contact information.
                    </p>

                    <div class="row mb-3">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="contact_firstname" class="form-label text-light-grey fw-semibold h6">
                                First Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="contact_firstname" id="contact_firstname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="contact_middlename" class="form-label text-light-grey fw-semibold h6">
                                Middle Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="contact_middlename" id="contact_middlename" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12">
                            <label for="contact_lastname" class="form-label text-light-grey fw-semibold h6">
                                Last Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="contact_lastname" id="contact_lastname" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                        </div>
                        
                    </div>

                    <div class="mb-3">
                        <label for="contact_phone_number" class="form-label text-light-grey fw-semibold h6">
                            Phone Number
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="contact_phone_number" id="contact_phone_number" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                    <div class="mb-3">
                        <label for="contact_email" class="form-label text-light-grey fw-semibold h6">
                            Email
                            <span class="text-danger">*</span>
                        </label>
                        <input type="email" name="contact_email" id="contact_email" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                </div>
            </div>
        </div>

        <!-- Delivery Information -->
        <div class="container px-xxl-5 px-xl-5 px-lg-5 px-3 pb-xxl-5 pb-xl-5 pb-lg-5 pb-3">
            <div class="row justify-content-center align-items-center px-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-12">
                    <p class="text-primary h2">
                        Delivery Information
                    </p>

                    <p class="fw-semibold text-light-grey mb-3">
                        Please enter the physical address where you want the certificate to be delivered.
                    </p>

                    <div class="mb-3">
                        <label for="contact_address1" class="form-label text-light-grey fw-semibold h6">
                            Address 1 (Street number and street name) 
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="contact_address1" id="contact_address1" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                    <div class="mb-3">
                        <label for="contact_address2" class="form-label text-light-grey fw-semibold h6">
                            Address 2 (if applicable: Apt, suite, floor) 
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="contact_address2" id="contact_address2" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                    <div class="mb-3">
                        <label for="contact_city" class="form-label text-light-grey fw-semibold h6">
                            City 
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="contact_city" id="contact_city" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                    <div class="mb-3">
                        <p class="form-label text-light-grey fw-semibold h6">
                            State 
                            <span class="text-danger">*</span>
                        </p>
                        <select name="contact_state" class="form-select text-light-grey bg-body-tertiary rounded-1 fw-semibold" aria-label="Select U.S. State">
                            <option selected></option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="contact_zip" class="form-label text-light-grey fw-semibold h6">
                            Zip Code
                            <span class="text-danger">*</span>
                        </label>
                        <input name="contact_zipcode" type="text" id="contact_zip" class="form-control bg-body-tertiary text-light-grey fw-semibold">
                    </div>

                    <!-- <input type="hidden" name="type" value="{{$type}}"> -->

                    <div class="row justify-content-end align-items-center pt-4">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 text-end">
                            <button type="submit" class="btn btn-primary fw-semibold p-3">
                                SUBMIT APPLICATION
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('files.footer')
    
</body>
</html>

@include('files.script')
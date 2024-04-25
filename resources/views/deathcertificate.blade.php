@include('files.head')
    <title>Death Certificate</title>
</head>
<body>
    
<!-- Navbar -->
@include('files.navbar')

    <!-- Hero -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-hero p-5">

                <div class="row justify-content-center">
                    <div class="col-5 pb-5">
                        <h1 class="text-center txt-hero text-white">
                            Fill in your Vital Record application form online from home.
                        </h1>
                    </div>
                </div>

                <div class="row px-5">
                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <img src="img/official-certified.svg" class="" width="40" height="100" alt="">
                            </div>
                            <div class="col-6 text-white pt-4">
                                <p class="m-0 fw-semibold">
                                    Official Certified Records
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <img src="img/guarantee.svg" class="" width="40" height="100" alt="">
                            </div>
                            <div class="col-6 text-white pt-4">
                                <p class="m-0 fw-semibold">
                                    Money-back Guarantee
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <img src="img/review-2-white.svg" class="" width="40" height="100" alt="">
                            </div>
                            <div class="col-6 text-white pt-4">
                                <p class="m-0 fw-semibold">
                                    Custom review by our team of experts
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <img src="img/security-4-white.svg" class="" width="40" height="100" alt="">
                            </div>
                            <div class="col-6 text-white pt-4">
                                <p class="m-0 fw-semibold">
                                    Secure Online Applications
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Button Links Birth and Death -->
    <div class="container py-5">
        <div class="row">
            <div class="text-center text-light-grey fs-3 fw-bold mb-4">
                Choose type of certificate:
            </div>
            <div class="col-lg-4">
                <a href="{{route('home.death_form', ['type' => 'new'])}}" class="col-12 btn bg-light-blue text-light fw-semibold py-2 fs-6">
                    NEW CERTIFICATE
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('home.death_form', ['type' => 'replace'])}}" class="col-12 btn bg-light-blue text-light fw-semibold py-2 fs-6">
                    REPLACE CERTIFICATE
                </a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('home.death_form', ['type' => 'certified'])}}" class="col-12 btn bg-light-blue text-light fw-semibold py-2 fs-6">
                    CERTIFIED COPY
                </a>
            </div>
        </div>
    </div>

    <!-- Disclaimer -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-darker-dirty-white p-5">
                <p class="text-light-grey px-5 text-center">
                    <b>Legal Disclaimer:</b> Realvitalbirthcertificate is a privately owned website that is not affiliated, owned or operated by the U.S. Government or any government agency. Realvitalbirthcertificate is an independent company that provides customers an easy form so that they can prepare their applications before the corresponding Health Department state office. As well, we do offer assistance services. Speed up the process of filling in the application forms and save time just going once to the Health Department to complete the necessary state requirements in order to have your certificate. If you are looking for blank forms, you can get them for free at the relevant state offices. By paying and using our private services you confirm that you acknowledge the above statements.
                </p>
            </div>
        </div>
    </div>

    <!-- Process -->
    <div class="container-fluid">
        <div class="row px-5">

            <div class="col-4 p-5">
                <div class="row justify-content-center g-3">
                    <div class="col-3">
                        <img src="img/fill-form-B.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-1 fw-bold text-primary fs-2">
                                1
                            </div>
                            <div class="col-11 text-light-grey ">
                                <b>Complete our online form</b> from the comfort of your home
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-5">
                <div class="row justify-content-center g-3">
                    <div class="col-3">
                        <img src="img/print-form-B.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-1 fw-bold text-primary fs-2">
                                2
                            </div>
                            <div class="col-11 text-light-grey ">
                                <b>Print and send your mistake-free application</b> to your state’s Health Department
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 p-5">
                <div class="row justify-content-center g-3">
                    <div class="col-3">
                        <img src="img/recieve-form-B.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-1 fw-bold text-primary fs-2">
                                3
                            </div>
                            <div class="col-11 text-light-grey ">
                                <b>Pay your state fees and get your Certificate</b> in record time while avoiding long lines and government offices
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Choose Maps -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 p-5 bg-dirty-white">
                <p class="h3 text-center">
                    <b>Choose your State</b> and start now
                </p>

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div id="map"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <section class="container-fluid bg-3973b7">
        <div class="row py-5">
            <div class="col-12 bg-3973b7">
                <div class="col-12 text-center fs-4 fw-bold text-light">
                    Select your state to check the processing times for your Certificate
                </div>
                <div class="row px-5">
                    <div class="col-lg-4 mt-4">
                        <div class="fs-5 fw-semibold text-light mb-1">
                            Select your state
                        </div>
                        <div class="my-3">
                            <select class="form-control rounded-1" name="select_state">
                                @include('files/state')
                            </select>
                        </div>
                        <div class="my-2 text-light fw-semibold">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                Birth Certificate
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                              <label class="form-check-label" for="flexRadioDefault2">
                                Death Certificate
                              </label>
                            </div>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-light col-12 rounded-1 text-secondary fw-semibold py-2 text-start ps-3">New Certificate</button>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-light col-12 rounded-1 text-secondary fw-semibold py-2 text-start ps-3">Replace Certificate</button>
                        </div>
                        <div class="my-3">
                            <button class="btn btn-light col-12 rounded-1 text-secondary fw-semibold py-2 text-start ps-3">Certified Copy</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card text-center pb-5">
                            <div class="card-header bg-eee border-0">
                                <div class="fw-semibold text-secondary">Standard</div>
                            </div>
                            <div>
                                <p class="fs-6 fw-semibold mt-2 text-light-grey">State Fee</p>
                                <h5>Not included</h5>
                                <p class="fw-semibold text-light-grey">You pay the $29 separately at the bank</p>

                                <p class="fs-6 fw-semibold mt-2 text-light-grey mt-5">Delivery Time</p>
                                <h5>5-7 weeks</h5>
                                <p class="fs-6 fw-semibold mt-2 text-light-grey">Includes an estimated</p>
                                <p class="fs-6 fw-semibold mt-2 text-light-grey">6 days for mailing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="card text-center pb-3 bg-70ade6">
                            <div class="card-header bg-3e628e border-0">
                                <div class="fw-bold fs-5 text-light">Premium</div>
                            </div>
                            <div class="text-light px-5">
                                <p class="fs-6 fw-semibold mt-2">State Fee</p>
                                <h5 class="fw-semibold">Included</h5>
                                <p class="fs-6 fw-semibold mt-4">Delivery Time</p>
                                <p class="fs-6 fw-semibold">With Express Shipping</p>
                                <h5>35 - 45 Business days</h5>
                                <p class="fs-6 fw-semibold mt-2">With Regular Shipping</p>
                                <p class="fs-6 fw-semibold mt-5">Choose Premium to save hassle and get your certificate faster!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us -->
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-12 px-5">
                <p class="text-light-grey h2 text-center">
                    Why Should you choose us?
                </p>

                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="row g-5 py-5 justify-content-center">
                            <div class="col-3">
                                <img src="img/mistakefree.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-5">
                                <p class="text-light-grey">
                                    <b class="h4">Mistake Free</b>
                                    <br>
                                    <br>
                                    Through our smart online form and personalized revision service we make sure that your application is not delayed or rejected.
                                    <br>
                                    <br>
                                    Our software and team of experts check for innacurate data, unqualified applicants, incorrect applicants, incorrect payments, and other common mistakes that could lead to the unnecesary waste of your time and money.
                                </p>
                                
                            </div>
                        </div>

                        <div class="row flex-row-reverse g-5 py-5 justify-content-center">
                            <div class="col-3">
                                <img src="img/fastandeasy.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-5">
                                <p class="text-light-grey">
                                    <b class="h4">Fast and Easy</b>
                                    <br>
                                    <br>
                                    We have streamlined the vital records application process to allow you to request a vital record certificate from any state in the U.S. in record time.
                                    <br>
                                    <br>
                                    You can apply from the comfort of your home at any time , eliminating the need to travel to distant government offices and wait in line.
                                </p>
                                
                            </div>
                        </div>

                        <div class="row g-5 py-5 justify-content-center">
                            <div class="col-3">
                                <img src="img/secure-service.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-5">
                                <p class="text-light-grey">
                                    <b class="h4">Secure Service</b>
                                    <br>
                                    <br>
                                    We protect your data and privacy at all times using the most cutting-edge encryption techniques and by following the strictest regulations.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container-fluid bg-3973b7">
        <div class="row">
            <div class="col-lg-12 px-5 py-4">
                <div class="row text-lg-center text-start">
                    <div class="col-lg-4">
                        <div class="fs-1 fw-semibold text-light">
                            Do you need help?
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="fs-1 fw-semibold text-light">
                            <a href="" class="link link-light text-decoration-none">
                                <i class="fa-solid fa-question fs-3"></i>
                                <span class="fs-3">Check our FAQs</span>
                                <i class="fa-solid fa-greater-than fs-3"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="fs-1 fw-semibold text-light">
                            <a href="" class="link link-light text-decoration-none">
                                <i class="fa-solid fa-address-book fs-3"></i>
                                <span class="fs-5">Contact our Customer Service Team</span>
                                <i class="fa-solid fa-greater-than fs-3"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid py-5">
        <div class="row px-4">
            <div class="col-lg-4">
                <div class="fw-bold fs-5">Easy and Convenient</div>
                <p class="text-light-grey">
                    Save time and get your Birth Certificate in record time from the comfort of your home.
                </p>
                <p class="text-light-grey">
                    Reviewed on a case by case basis, this can take between 24 to 72 hours before we email you yoir mistake-free application and personalized instructions
                </p>
            </div>
            <div class="col-lg-4">
                <div class="fw-bold fs-5">Custom review by our team of experts</div>
                <p class="text-light-grey">
                    Following the sctrictest regulations and using the most cutting-edge encryption techniques, we protect your data and privacy.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="fw-bold fs-5">Custom review by our team of experts</div>
                <p class="text-light-grey">
                    Ordering a Birth certificate through our secure online service is quick and easy.
                </p>
                <p class="text-light-grey">
                    Our team of experts are trained for all states and will review your application to ensure that you get exactly what you need
                </p>
            </div>
        </div>
        <div class="row p-5 justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="fs-1 fw-semibold text-7dc0ff">
                    You only need a single ID to require your certificate!
                </div>
            </div>
            <div class="col-lg-8">
                <p class="text-light-grey">
                    To submit a birth certificate application you will only need to provide a copy of your photo ID. We made the application process easy, fast, and secure. Our team of experts are also standing by to help you through the application process if needed.
                </p>
                <p class="text-light-grey">
                    Once you submit your application, our team of experts will review it to make sure there are no mistakes or missing information.
                </p>
                <p class="text-light-grey">
                    Once the application is complete, you only need to mail it and you will receive the official birth certificate at home. It's easy, fast, and simple!
                </p>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <h2 class="text-light-grey text-center">Most popular Birth Certificate searches</h2>
        <div class="row text-center my-5 fw-semibold">
            <div class="col-md-4">
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Arkansas</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>California</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Florida</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Georgia</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Illinois</b> Birth Certificate</a>
            </div>
            <div class="col-md-4">
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Kentucky</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Michigan</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Mississippi</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>New Jersey</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>New York Birth</b> Certificate</a>
            </div>
            <div class="col-md-4">
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>North Carolina</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Ohio Birth</b> Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Pennsylvania</b> Birth Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Texas Birth</b> Certificate</a>
                <a href="#" class="list-group-item list-group-item-action link link-primary"><b>Virginia Birth</b> Certificate</a>
            </div>
        </div>
        <div class="d-flex justify-content-center text-center my-5">
            <div class="col-lg-3" style="border-bottom: 5px solid grey">
                <div class="h5 text-light-grey fw-bold">ALL U.S. STATES</div>
                <select class="form-control rounded-1" name="all_state">
                    @include('files/state')
                </select>
            </div>
        </div>
    </section>
    @include('files.footer')
@include('files/script')
</body>
</html>



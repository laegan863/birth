@include('files.head')

    <title>Contact Us</title>
</head>
<body>
    
@include('files.navbar')

    <!-- Hero -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-hero p-5">

                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-11">
                        <h1 class="text-center txt-hero text-white hero-txt">
                            Contact Us
                        </h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="container px-3 py-5">
        <div class="row justify-content-center flex-row-reverse g-5">
            
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-11">
                <p class="fw-bold text-light-grey h4 mb-0">
                    GET IN TOUCH
                </p>
                <p class="text-light-grey h4 mb-0">
                    Can’t find what you’re looking for?
                </p>
                <p class="text-light-grey fw-semibold">
                    Our team of experts are here to help you with any question you may have. Please use the form below to send a request directly to our agents.
                </p>

                <div class="mb-2">
                    <label for="contact_name" class="form-label text-light-grey my-1">Full Name</label>
                    <input type="text" id="contact_name" class="form-control border-secondary py-2 rounded-1">
                </div>

                <div class="mb-2">
                    <label for="contact_email" class="form-label text-light-grey my-1">Email</label>
                    <input type="email" id="contact_email" class="form-control border-secondary py-2 rounded-1">
                </div>

                <div class="mb-2">
                    <label for="contact_email_confirm" class="form-label text-light-grey my-1">Confirm Email</label>
                    <input type="email" id="contact_email_confirm" class="form-control border-secondary py-2 rounded-1">
                </div>

                <label for="have_placed_order" class="form-label text-light-grey my-1 mt-3">Have you placed an order?</label>
                <div class="mb-2" id="have_placed_order">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input border-secondary" type="radio" id="inlineradio1" name="have_placed_order" value="Yes">
                        <label class="form-check-label text-light-grey" for="inlineradio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline ms-5">
                        <input class="form-check-input border-secondary" type="radio" id="inlineradio2" name="have_placed_order" value="No">
                        <label class="form-check-label text-light-grey" for="inlineradio2">No</label>
                    </div>
                </div>

                <div class="mb-2 mt-4">
                    <select class="form-select py-2 border-secondary mb-3 fw-semibold text-light-grey" aria-label="Large select example">
                        <option selected class="fw-bold">Select one option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="reference_number" class="form-label text-light-grey my-1">Order reference number</label>
                    <input type="email" id="reference_number" class="form-control border-secondary py-2 rounded-1">
                </div>

                <div class="mb-2">
                    <label for="comments_div" class="form-label text-light-grey my-1">Comments</label>
                    <div class="form-floating" id="comments_div">
                        <textarea class="form-control border-secondary" placeholder="Leave a comment here" id="comments" style="height: 160px"></textarea>
                        <label for="comments" class="text-light-grey">Comments</label>
                    </div>
                </div>

                <div class="mb-2" id="read_and_understood">
                    <div class="form-check form-check-inline me-5">
                        <input class="form-check-input border-secondary" type="checkbox" id="inlinecheckbox1" name="read_and_understood" value="Yes">
                        <label class="form-check-label text-light-grey" for="inlinecheckbox1">I have read and understood the 
                            <a href="#" class="text-decoration-none text-primary">
                                Privacy Policy
                            </a>
                        </label>
                    </div>
                </div>

                <div class="row justify-content-end mt-4">
                    <div class="col-4 text-end">
                        <button class="btn btn-primary fw-semibold px-4 py-2">
                            Submit
                        </button>
                    </div>
                </div>

            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-11">
                <p class="fw-bold text-light-grey h4 mb-0">
                    HELP & SUPPORT
                </p>
                <p class="text-light-grey h4 mb-0">
                    Useful Hints
                </p>
                
                <div class="card bg-primary-subtle rounded-0 border-0 mt-3">
                    <div class="card-body border-start border-5 border-primary">
                        <p class="card-title h5 text-primary-emphasis fw-bold px-3">
                            How do I request a birth / death certificate?
                        </p>
                        <p class="card-text px-3 text-light-grey fw-semibold">
                            To obtain a birth certificate, you need to fill out the application form provided by your state, include a photocopy of your ID, pay the necessary fees, and send it to the Health Department office. Sometimes, the state may ask for your application to be certified by a notary public.
                        </p>
                    </div>
                </div>

                <div class="card bg-primary-subtle rounded-0 border-0 mt-4">
                    <div class="card-body border-start border-5 border-primary">
                        <p class="card-title h5 text-primary-emphasis fw-bold px-3">
                            How do I request a birth / death certificate?
                        </p>
                        <p class="card-text px-3 text-light-grey fw-semibold">
                            To obtain a birth certificate, you need to fill out the application form provided by your state, include a photocopy of your ID, pay the necessary fees, and send it to the Health Department office. Sometimes, the state may ask for your application to be certified by a notary public.
                        </p>
                    </div>
                </div>

                <div class="card bg-primary-subtle rounded-0 border-0 mt-4">
                    <div class="card-body border-start border-5 border-primary">
                        <p class="card-title h5 text-primary-emphasis fw-bold px-3">
                            How do I request a birth / death certificate?
                        </p>
                        <p class="card-text px-3 text-light-grey fw-semibold">
                            To obtain a birth certificate, you need to fill out the application form provided by your state, include a photocopy of your ID, pay the necessary fees, and send it to the Health Department office. Sometimes, the state may ask for your application to be certified by a notary public.
                        </p>
                    </div>
                </div>

                <div class="card bg-primary-subtle rounded-0 border-0 mt-4">
                    <div class="card-body border-start border-5 border-primary">
                        <p class="card-title h5 text-primary-emphasis fw-bold px-3">
                            How do I request a birth / death certificate?
                        </p>
                        <p class="card-text px-3 text-light-grey fw-semibold">
                            To obtain a birth certificate, you need to fill out the application form provided by your state, include a photocopy of your ID, pay the necessary fees, and send it to the Health Department office. Sometimes, the state may ask for your application to be certified by a notary public.
                        </p>
                    </div>
                </div>

                <p class="fw-bold text-light-grey h4 mt-4">
                    CONTACT PHONE
                </p>

                <a href="#" class="text-decoration-none">
                    <p class="fw-bold text-primary h4">
                        +1 XXX XXX 5552
                    </p>
                </a>

            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="container-fluid bg-light-dark-blue p-xxl-5 p-xl-5 p-lg-5 p-4 text-white">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0 ps-xxl-5 ps-xl-5 ps-lg-5 ps-0">
                <p class="h1 fw-bold text-xxl-start text-xl-start text-lg-start text-center">
                    Vital Record Services
                </p>

                <p class="fw-semibold text-xxl-start text-xl-start text-lg-start text-center">
                    We have simplified the complex process of obtaining the Vital Record Certificate you need and all from the comfort of your home. Save time, start now!
                </p>
            </div>

            <div class="col-lg-6 ps-xxl-5 ps-xl-5 ps-lg-5 ps-0 mt-3">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 text-center">
                        <p class="fw-semibold mb-3">
                            Order a Birth Certificate
                        </p>
                        <a href="#" class="btn btn-warning fw-bold text-dark px-5 py-3 d-xxl-block d-xl-block d-lg-block d-inline-block">
                            Birth Certificate
                        </a>
                    </div>

                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 text-center my-xxl-0 my-xl-0 my-lg-0 my-4">
                        <p class="fw-semibold mb-3">
                            Order a Death Certificate
                        </p>
                        <a href="#" class="btn btn-warning fw-bold text-dark px-5 py-3 d-xxl-block d-xl-block d-lg-block d-inline-block">
                            Death Certificate
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('files.footer')
    
</body>
</html>

@include('files.script')
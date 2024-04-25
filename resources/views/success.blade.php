@include('files.head')

    <title>Payment Success</title>
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
                            Payment Success
                        </h1>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row g-5 justify-content-center align-items-center">
            <div class="col-12 px-5">
                <div class="row g-5 justify-content-center align-items-center">
                    <div class="col-6">
                        <img src="{{asset('img/success-certificate.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-6">
                        <p class="text-light-grey h1 fw-bold mb-4">
                            Payment Success
                        </p>

                        <p class="text-light-grey fw-semibold">
                            You have successfully ordered on VitalCert with a Transaction ID of (
                                <span class="text-danger fw-bold text-uppercase">
                                    {{$trans_id}}
                                </span>
                            ) .
                            Our team will process the details within the next few minutes. 
                            Please feel free to <a href="#" class="text-decoration-none text-primary fw-bold">call us</a> or <a href="#" class="text-decoration-none text-primary fw-bold">email</a> us if you have any questions. 
                            It really was THAT easy! 
                            <br><br>
                            Thank you for being a loyal customer here at VitalCert!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('files.footer')
    
</body>
</html>

@include('files.script')
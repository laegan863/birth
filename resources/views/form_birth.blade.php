<!DOCTYPE html>
<html lang="en">

@include('files.head')

<style type="text/css">
    /* CSS for the overlay */
    body {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: transparent; /* Initially transparent */
        z-index: 9999; /* Ensure it's on top of other elements */
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
<section class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card p-5 border-0 shadow">
                <h4 class="text-7dc0ff">State of birth</h4>
                <p class="h5 text-light-grey">State of birth <b class="text-danger">*</b></p>
                <input type="hidden" value="{{$type}}" id="type">
                <select class="form-control" id="select_state">
                    <option value=""></option>
                    @include('files/state-form')
                </select>
            </div>
        </div>
    </div>
</section>

@include('files.script')

<script>
    $(document).ready(function(){
        $('#select_state').on('change', function(){
            var selectedState = $(this).val();            
            if(selectedState!="") {
            window.location.href = '{{route("form.birth")}}?state=' + selectedState + '&type='+ $("#type").val();
            }else{
                alert('1');
            }
        });
    });
</script>


</body>
</html>

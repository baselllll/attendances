<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        @include('includes._navbar')


        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">See Your<br>Attendaces</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Attendaces Service to check attendances day per day</p>
                        <a href="{{route('attendance')}}" target="_blank" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">check</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/attandance.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.scripts')
</body>

</html>

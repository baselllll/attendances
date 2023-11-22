<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<style>
    /* Add this style to prevent text wrapping in cells */
    #employeeTable td {
        white-space: nowrap;
    }
</style>
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


            <div class="container mt-5">
                <div class="row" style="font-weight: bold">
                    <div class="col-md-4 mb-4">
                        <a href="{{route('attendance-details',['empno'=>'35250'])}}">
                            <div class="card bg-success ">
                                <div class="card-body">
                                    <h5 class="card-title">Employee #35250</h5>
                                    <p class="card-text">Basel Osama</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-4 mb-4">
                        <a href="{{route('attendance-details',['empno'=>'35250'])}}">
                            <div class="card bg-success ">
                                <div class="card-body">
                                    <h5 class="card-title">Employee #35250</h5>
                                    <p class="card-text">Murshid Mohamed</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="{{route('attendance-details',['empno'=>'33040'])}}">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <h5 class="card-title">Employee #33040</h5>
                                    <p class="card-text">Hassan Ahmed</p>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>
            </div>

    </div>
</div>
@include('includes.scripts')


</body>
</html>

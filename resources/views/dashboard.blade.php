@extends("layouts.app")
@section("title", "Dashboard")
@section("content")
<div class="row mt-4">
    <div class="col-sm-6 col-md-4">
        <div class="abs-card dash-card card-shadow-lg crd-4">
            <div class="abs-card-body card-shadow-lg">
                <div class="d-flex align-items-center">
                    <div class="">
                        <h6 class="">Projects</h6>
                        <h3 class="font-weight-bold">500</h3>
                    </div>
                    <div class="ml-auto">
                        <i class="fa fa-folder-open crd-icon text-secondary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 mb-2">
        <div class="abs-card dash-card card-shadow-lg bg-color crd-">
            <div class="abs-card-body">
                <div class="d-flex align-items-center">
                    <div class="p-">
                        <h6 class="">Team members</h6>
                        <h3 class="font-weight-bold">500</h3>
                    </div>
                    <div class="ml-auto">
                        <i class="fa fa-users crd-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 mb-2">
        <div class="abs-card dash-card card-shadow-lg">
            <div class="abs-card-body">
                <div class="d-flex align-items-center">
                    <div class="p-">
                        <h6 class="">Completed projects</h6>
                        <h3 class="font-weight-bold">500</h3>
                    </div>
                    <div class="ml-auto">
                        <i class="fa fa-folder-o crd-icon text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

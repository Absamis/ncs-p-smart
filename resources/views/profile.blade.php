@extends("layouts.app")
@section("title", "Profile")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-3 font-weight-bold">Personal Details</h6>
                    <form class="">
                        <div class="form-group mb-2">
                            <label class="mb-1">First name</label>
                            <div class=" w-100">
                                <input type="text" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1">Last name</label>
                            <div class=" w-100">
                                <input type="text" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1">Email address</label>
                            <div class=" w-100">
                                <input type="email" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2 text-right">
                            <button class="btn bg-color" type="button">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-3 font-weight-bold">Security Details</h6>
                    <form class="">
                        <div class="form-group mb-2">
                            <label class="mb-1">Current Password</label>
                            <div class=" w-100">
                                <input type="password" min="1" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1">New Password</label>
                            <div class=" w-100">
                                <input type="password" min="1" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="mb-1">Confirm Password</label>
                            <div class=" w-100">
                                <input type="password" min="1" class="abs-form-input" value="" />
                            </div>
                        </div>
                        <div class="form-group mb-2 text-right">
                            <button class="btn bg-color" type="button">
                                Change
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

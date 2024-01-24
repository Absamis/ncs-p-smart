@extends("layouts.app")
@section("title", "Team")
@section("content")
<style>
.p-title{
    color: #333;
    font-weight: bold
}
.p-head{
    margin-top: 10px;
}
.task-title{
    color: #333;
    font-size: 17px;
}
</style>
<div class="container">
    <div class="row" style="margin-top: 3em;">
        <div class="col">
            <p class="p-title">First name</p>
            <p class="p-head">Build OGFex Web app</p>
        </div>
        <div class="col">
            <p class="p-title">Last name</p>
            <h6 class="p-head">Build OGFex Web app</h6>
        </div>
    </div>
    <div class="row" style="margin-top: 3em;">
        <div class="col">
            <p class="p-title">Email address</p>
            <p class="p-head">5 weeks</p>
        </div>
        <div class="col">
            <p class="p-title">Status</p>
            <p><span class="badge badge-pills badge-success">active</span>
        </div>
    </div>
    {{-- <div class="row" style="margin-top: 3em;">
        <div class="col">
            <p class="p-title">End date</p>
            <p class="p-head">Oct 12, 2024</p>
        </div>
        <div class="col">
            <p class="p-title">Status</p>
            <p><span class="badge badge-pills badge-warning">pending</span>
        </div>
    </div> --}}

    <section>
        <div class="my-4">
            <h4 class="font-weight-bold">Tasks</h4>
        </div>
        <div class="d-flex my-2 card-body px-4 border justify-content-between">
            <p class="task-title">Design the login and authentication</p>
            <p><span class="badge badge-pills badge-primary">In progress</span></p>
            <div class="d-flex align-items-center">
                {{-- <small class="font-weight-bold" style="">Assigned to</small> --}}
                <span class="badge badge-pills badge-warning">Pending</span>
                <div class="dropdown dropleft">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Pending</a>
                        <a href="" class="dropdown-item">In progress</a>
                        <a href="" class="dropdown-item">Completed</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

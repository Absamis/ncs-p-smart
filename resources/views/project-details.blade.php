@extends("layouts.app")
@section("title", "Project")
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
            <p class="p-title">Project name</p>
            <p class="p-head">Build OGFex Web app</p>
        </div>
        <div class="col">
            <p class="p-title">Project description</p>
            <h6 class="p-head">Build OGFex Web app</h6>
        </div>
    </div>
    <div class="row" style="margin-top: 3em;">
        <div class="col">
            <p class="p-title">Project duraion</p>
            <p class="p-head">5 weeks</p>
        </div>
        <div class="col">
            <p class="p-title">Start date</p>
            <h6 class="p-head">Oct 11, 2023</h6>
        </div>
    </div>
    <div class="row" style="margin-top: 3em;">
        <div class="col">
            <p class="p-title">End date</p>
            <p class="p-head">Oct 12, 2024</p>
        </div>
        <div class="col">
            <p class="p-title">Status</p>
            <p><span class="badge badge-pills badge-warning">pending</span>
        </div>
    </div>

    <section>
        <div class="d-flex my-4 align-items-center">
            <h4 class="font-weight-bold">Task</h4>
            <span class="ml-auto">
                <button type="button" data-toggle="modal" data-target="#newTaskModal" class="abs-btn rounded-1 bg-color text-white">
                    <i class="fa fa-file"></i> New task
                </button>
            </span>
            <div class="modal" id="newTaskModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h6 class="modal-title font-weight-bold">Add new task</h6>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form class="">
                                <div class="form-group mb-2">
                                    <label class="mb-1">Title</label>
                                    <div class=" w-100">
                                        <input type="text" class="abs-form-input" value="" />
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1">Deadline</label>
                                    <div class=" w-100">
                                        <input type="date" class="abs-form-input" value="" />
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="mb-1">Description</label>
                                    <div class=" w-100">
                                        <textarea rows="6" class="abs-form-input" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-2 text-right">
                                    <button class="btn bg-color" type="button">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex my-2 card-body px-4 border justify-content-between">
            <p class="task-title">Design the login and authentication</p>
            <p><span class="badge badge-pills badge-primary">In progress</span></p>
            <div class="d-flex align-items-center">
                {{-- <small class="font-weight-bold" style="">Assigned to</small> --}}
                <span class="font-weight-"><i class="fa fa-user text-color"></i> Adebiyi</span>
                <div class="dropdown dropleft">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Adebiyi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex my-2 card-body px-4 border justify-content-between">
            <p class="task-title">Design the login and authentication</p>
            <p><span class="badge badge-pills badge-primary">In progress</span></p>
            <div class="d-flex align-items-center">
                <small class="font-weight-bold" style="">Unassigned</small>
                <div class="dropdown dropleft">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Adebiyi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@extends("layouts.app")
@section("title", "Project")
@section("content")
<!-- Booking Modal -->
<div class="modal" id="withdrawModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title font-weight-bold">Add new project</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="">

                    <div class="form-group mb-2">
                        <label class="mb-1">Project name</label>
                        <div class=" w-100">
                            <input type="text" class="abs-form-input" value="" />
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1">Duration in weeks</label>
                        <div class=" w-100">
                            <input type="number" min="1" class="abs-form-input" value="" />
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="mb-1">Project description</label>
                        <div class=" w-100">
                            <textarea class="abs-form-input" rows="10"></textarea>
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

<!-- END MODAL -->
<div class="mb-3 text-right">
    <button type="button" data-toggle="modal" data-target="#withdrawModal" class="abs-btn rounded-1 bg-color text-white">
        <i class="fa fa-user"></i> New project
    </button>
</div>
<div class="abs-table-wrapper">
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Duration in weeks</th>
            <th>No of tasks</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <td>Building OgFex App</td>
            <td>12</td>
            <td>2</td>
            <td>
                <span class="badge badge-pills badge-success">active</span>
            </td>
            <td>
                <span class="badge badge-warning">Pending</span>
            </td>
        </tbody>
    </table>
</div>
@endsection

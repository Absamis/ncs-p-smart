@extends("layouts.app")
@section("title", "Task Review")
@section("content")
<div class="abs-table-wrapper my-5">
    <table class="table table-striped">
        <thead>
            <th>Member name</th>
            <th>Project name</th>
            <th>Task name</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            <td>Adebiyi Abdulsamod</td>
            <td>Build OGFex App</td>
            <td>Develop Login and Auth screen</td>
            <td>
                <span class="badge badge-pills badge-warning">awaiting review</span>
            </td>
            <td>
                <button type="button" class="btn bg-color" data-toggle="modal" data-target="#reviewModal">
                    Review
                </button>
                <div class="modal" id="reviewModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h5>Add review</h5>
                                <div class="p-3 card-body border d-flex justify-content-between">
                                    <p><i class="fa fa-user"></i> Adebiyi Abdulsamod</p>
                                    <p><i class="fa fa-tasks"></i> Design Login and Auth screen</p>
                                </div>
                                <form class="">
                                    <div class="form-group mb-2">
                                        <label class="mb-1">Error Level</label>
                                        <div class=" w-100">
                                            <input type="number" min="1" class="abs-form-input" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-1">Documentation Level</label>
                                        <div class=" w-100">
                                            <input type="number" min="1" class="abs-form-input" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-1">Actions</label>
                                        <div class=" w-100">
                                            <select class="abs-form-input">
                                                <option value=""></option>
                                                <option value="">Approve</option>
                                                <option value="">Decline</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mb-1">Remarks</label>
                                        <div class=" w-100">
                                            <textarea rows="4" class="abs-form-input"></textarea>
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
            </td>
        </tbody>
    </table>
</div>
@endsection

<!--Create Admins Modal -->
<div class="modal fade" id="addAdmins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document"
        style="margin: auto; width: 90%; height: 90%; max-width: 90%; max-height: 90%">

        <div class="modal-content" style="height: 90%">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Admins</h5>

                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createForm" action="" method="post">
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-name">User Name</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-description">Full Name</label>
                                        <input type="text" name="fullname" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-price">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Phone Number</label>
                                        <input type="number" name="phone_number" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnCreateAdmins"
                    onclick="resetPagination()">Create</button>
            </div>
        </div>
    </div>
</div>
<!--End Admins Modal -->

<!--Update Admins Modal -->
<div class="modal fade" id="updateAdmins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document"
        style="margin: auto; width: 90%; height: 90%; max-width: 90%; max-height: 90%">

        <div class="modal-content" style="height: 90%">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Admins</h5>

                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" action="" method="post">
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">User Name</label>
                                        <input type="text" id="username" name="username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="fullname">Full Name</label>
                                        <input type="text" id="fullname" name="fullname" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Address</label>
                                        <input type="text" id="address" name="address" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number</label>
                                        <input type="number" id="phone_number" name="phone_number"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status_id" id="status"
                                            aria-label="Default select example">
                                            @if (!empty($status))
                                                @foreach ($status as $sta)
                                                    <option value="{{ $sta->id }}">{{ $sta->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btnUpdateAdmins" data-dismiss="modal">
                    Update</button>
            </div>
        </div>
    </div>
</div>
<!--End Admins Modal -->

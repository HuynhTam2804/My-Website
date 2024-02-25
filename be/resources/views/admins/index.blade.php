@extends('layout')

@section('content')
    @include('admins.modals')

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admins /</span> Index </h4>

    <div class="mt-2 d-flex align-items-center">
        <button class="btn btn-primary me-2" data-toggle="modal" data-target="#addAdmins">Add</button>
    </div>
    <br>

    <div class="input-group input-group-merge">
        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
        <input type="text" id="searchInput" class="form-control" placeholder="Search..." aria-label="Search..."
            aria-describedby="basic-addon-search31">
    </div>
    <br>
    <div class="card">
        <br>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover" id="listAdmins">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Address </th>
                        <th>Phone </th>
                        <th>Last Login </th>
                        <th>Status </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @include('admins.search')

                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
    <script>
        var $j = jQuery.noConflict();

        var currentAdminsID;
        $j(document).ready(function() {
            $j(document).on('click', '.edit-button', function() {
                console.log("tt")
                var adminsID = $j(this).data('admin-id');

                console.log('color', adminsID);
                currentAdminsID = null;
                console.log('curen_1', currentAdminsID)
                currentAdminsID = adminsID;
                console.log('curen_2', currentAdminsID)
                updateAdmins(currentAdminsID);
            });

            $j(document).on('click', '#btnCreateAdmins', function() {
                createAdmins();
                $("#createForm")[0].reset();

            });
            $j(document).on('click', '#btnUpdateAdmins', function() {
                updateAdminsHandle(currentAdminsID);
            });
        });

        $j(document).ready(function() {})
        var csrfToken = '{{ csrf_token() }}';

        function createAdmins() {
            var formElement = $('form#createForm')[0];
            var formData = new FormData(formElement);

            formData.append('_token', csrfToken);
            $j.ajax({
                url: "{{ route('admins.create') }}",
                type: "POST",
                data: formData,
                contentType: false, // sẽ trả về string or json Không đặt ContentType để FormData tự động xử lý data
                processData: false, // Không xử lý dữ liệu trước khi gửi
                success: function(data) {
                    $j('#listAdmins tbody').html(data);
                    /* Swal.fire({
                        title: 'Xác Nhận Xóa?',
                        text: 'Bạn có chắc muốn xóa ',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Đồng ý',
                        cancelButtonText: 'Hủy bỏ',
                    }) */
                },
                error: function() {
                    console.error('Có lỗi xảy ra khi gửi dữ liệu.');
                }
            })
        }

        function updateAdmins(adminsID) {
            $j.ajax({
                url: '/admins/update/' + adminsID,
                type: "GET",
                success: function(data) {

                    $j("#updateAdmins #username").val(data.data.username);
                    $j("#updateAdmins #fullname").val(data.data.fullname);
                    $j("#updateAdmins #email").val(data.data.email);
                    $j("#updateAdmins #password").val(data.data.password);
                    $j("#updateAdmins #address").val(data.data.address);
                    $j("#updateAdmins #phone_number").val(data.data.phone_number);
                    $j("#updateAdmins #status").val(data.data.status_id);
                    $j("#updateAdmins").modal("hide");
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            })
        }

        function updateColorHandle(adminsID) {
            var formElement = $('form#updateForm')[0];
            var formData = new FormData(formElement);

            formData.append('_token', csrfToken);
            $j.ajax({
                url: '/admins/update/' + adminsID,
                type: "POST",
                data: formData,
                contentType: false, // sẽ trả về string or json Không đặt ContentType để FormData tự động xử lý data
                processData: false, // Không xử lý dữ liệu trước khi gửi
                success: function(data) {
                    $j('#listAdmins tbody').html(data);

                },
                error: function() {
                    console.error('Có lỗi xảy ra khi gửi dữ liệu.');
                }
            })
        }

        $j(document).ready(function() {
            $j('#searchInput').on('keyup', function(event) {
                if (event.key === 'Enter') {
                    searchAdmins();
                }
            });
        });

        function searchAdmins() {
            let keyword = $j('#searchInput').val();
            //console.log(keyword);
            $j.ajax({
                url: "{{ route('admins.search') }}",
                type: 'POST',
                data: {
                    data: keyword,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data)
                    $j('#listAdmins tbody').html(data);

                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endsection

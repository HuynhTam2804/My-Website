@extends('layout')

@section('page-js')
    @if (session('thong_bao'))
        <script>
            Swal.fire("{{session('thong_bao')}}")
        </script>
    @endif
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> List </h4>
        <hr class="my-5" />
              
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($SP as $sanPham)
                                <tr class="table-info">
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3">{{$sanPham->id}}</i>
                                    </td>

                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3">{{$sanPham->name}}</i>
                                    </td>
                                    
                                    <td>
                                        @foreach ($hinh as $dsHinh)
                                            @if ($dsHinh->san_pham_id == $sanPham->id)
                                                <img src="{{ asset($dsHinh->url) }}" style="width:100px" />
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3">{{$sanPham->price}}</i>
                                    </td>

                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3">{{$sanPham->quantity}}</i>
                                    </td>

                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3">{{$sanPham->loai_san_pham}}</i>
                                    </td>

                                    <td>
                                        <i class="badge bg-label-primary me-1">{{$sanPham->description}}</i>
                                    </td>

                                    <td>
                                        <i class="badge bg-label-primary me-1">{{$sanPham->status}}</i>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        <hr class="my-5" />
    </div>
@endsection

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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Add</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Price</label>
                                <div class="col-sm-10">
                                    <input
                                        type="number"
                                        name="price"
                                        class="form-control"
                                        id="basic-default-company"
                                        placeholder="  "
                                    />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Quantity</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input
                                            type="number"
                                            name="quantity"
                                            id="basic-default-email"
                                            class="form-control"
                                            placeholder=""
                                            aria-label="john.doe"
                                            aria-describedby="basic-default-email2"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Product Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="product_types_id" aria-label="Default select example">
                                        @foreach ($LSP as $loaiSanPham)
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <!-- <option value="{{ $loaiSanPham->id }}">{{ $loaiSanPham->ten }}</option> -->
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="images" multiple name="images[]" type="file"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected>Active</option>
                                        <option value="1">InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                <div class="col-sm-10">
                                    <textarea
                                        id="basic-default-message"
                                        name="descriptioin"
                                        class="form-control"
                                        placeholder=""
                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2">
                                    </textarea>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
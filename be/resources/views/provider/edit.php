@extends('layout')

@section('page-js')
    @if (session('success'))
        <script>
            Swal.fire("{{session('success')}}")
        </script>
    @endif
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Provider /</span> Edit</h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{route('provider.edit-handler',['id' => $PVD->id])}}">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ $PVD->name }}" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" value="{{ $PVD->address }}" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone_number" value="{{ $PVD->phone_number }}" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="{{ $PVD->email }}" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" value="{{ $PVD->description }}" class="form-control" id="basic-default-name" placeholder=" " />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone"> Status</label>
                                <div class="col-sm-10">
                                    <select name="status_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        @foreach($PVD as $Provider)
                                            <option value="{{ $Provider->id }}" 
                                                @if( $Provider->id == $PVD->status_id) selected @endif>
                                                {{ $Provider->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

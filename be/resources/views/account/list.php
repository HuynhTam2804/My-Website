@extends('layout')
@section('page-js')
    @if (session('thong_bao'))
        <script>
            Swal.fire("{{session('thong_bao')}}")
        </script>
    @endif
@endsection

@section('content')



@endsection

@extends('client.layout.main')
@section('content')
    <div class="container-fluid d-flex justify-content-center">
        <div class="w-100">
            <h3> {{ $data['news']->title  }} </h3>
            <p>
                {{ $data['news']->description  }}
            </p>
        </div>
    </div>
@endsection

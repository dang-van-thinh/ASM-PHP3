@extends('client.layout.main')
@section('content')
    <div class="container-fluid">
        <h3> Danh mục tin : {{$data['nameCategory']}} </h3>
        @foreach($data['news'] as $new)
            <div>
                <h3> {{$new->title}} </h3>
                <p>
                    {{$new->description}}
                </p>
            </div>
        @endforeach

    </div>
@endsection

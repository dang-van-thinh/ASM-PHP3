@extends('admin.layout.partials.master')
@section('content')
    <form action="{{ route('admin.category.update',$data['category']->id) }}" method="POST">
        @method('put')
        <h3> Detail Category </h3>
        @csrf
        <div class="mt-3">
            <label for="name">Name</label>
            <input type="text" name="name"
                   class="form-control" placeholder="Name category"
                value="{{ $data['category']->name }}"
            >
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
        <a href="{{route('admin.category.index')}}" class="btn btn-info mt-3"> <-- Back</a>
    </form>
@endsection
